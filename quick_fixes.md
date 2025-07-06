# Быстрые исправления для текущего проекта

## 1. Исправить сохранение заказов

### Обновить OrderController.php:
```php
<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderPostRequest;
use App\Models\Order;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    public function index()
    {
        return view('shop_partials.dia_make_order');
    }

    public function create(OrderPostRequest $request): JsonResponse
    {
        try {
            // Создаем заказ
            $order = Order::create([
                'kit_id' => 1, // Пока хардкодим, так как только один вариант
                'display_id' => $request->validated()['display'] ?? 1,
                'brakes_id' => $request->validated()['brakes'] ?? 1,
                'battery_id' => $request->validated()['battery'] ?? 1,
                'rim_size' => $request->validated()['rim'],
                'mobile_number' => $request->validated()['mobile_number'],
                'name' => $request->validated()['name'],
                'email' => $request->validated()['email'],
                'message' => $request->validated()['message'] ?? '',
                'order_status' => 'Заказ открыт'
            ]);

            // Отправляем email администратору
            // Mail::to(config('mail.admin_email'))->send(new OrderCreated($order));

            return response()->json([
                'success' => true,
                'message' => 'Заказ успешно создан! Мы свяжемся с вами в ближайшее время.',
                'order_id' => $order->id
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ошибка при создании заказа. Попробуйте позже.'
            ], 500);
        }
    }
}
```

### Обновить форму заказа в dia_make_order.blade.php:
```javascript
$('#orderForm').on('submit', function (event) {
    event.preventDefault();
    
    // Добавляем индикатор загрузки
    let submitBtn = $(this).find('button[type="submit"]');
    let originalText = submitBtn.text();
    submitBtn.prop('disabled', true).text('Отправка...');

    let formData = {
        "_token": "{{ csrf_token() }}",
        name: $('#name').val(),
        email: $('#email').val(),
        mobile_number: $('#mobile_number').val(),
        message: $('#message').val(),
        kit: $('#kit').val(),
        display: $('input[name="display"]:checked').val(),
        brakes: $('#brakes').val(),
        rim: $('#rim').val(),
        battery: $('#battery').val(),
    };

    $.ajax({
        url: "{{ route('order.create') }}",
        type: "POST",
        data: formData,
        success: function (response) {
            if (response.success) {
                alert(response.message);
                hideModal();
                // Очищаем форму
                $('#orderForm')[0].reset();
            } else {
                alert('Ошибка: ' + response.message);
            }
        },
        error: function(xhr) {
            alert('Произошла ошибка. Попробуйте позже.');
        },
        complete: function() {
            submitBtn.prop('disabled', false).text(originalText);
        }
    });
});
```

## 2. Добавить расчет цены в реальном времени

### В configurator.blade.php добавить:
```javascript
<script>
$(document).ready(function() {
    let basePrice = 11000; // Базовая цена набора
    
    function calculateTotalPrice() {
        let totalPrice = basePrice;
        
        // Добавляем цену дисплея
        let selectedDisplay = $('input[name="display"]:checked');
        if (selectedDisplay.length) {
            totalPrice += parseFloat(selectedDisplay.attr('price')) || 0;
        }
        
        // Добавляем цену спицовки
        let rimPrice = $('#rim').val() == '0' ? 0 : 500; // 500 грн за спицовку
        totalPrice += rimPrice;
        
        // Добавляем цену тормозов
        let brakesPrice = $('#brakes').val() == '1' ? 200 : 0; // +200 грн за гидролинии
        totalPrice += brakesPrice;
        
        // Обновляем отображение цены
        $('#average_price').text(totalPrice + ' грн');
    }
    
    // Слушатели событий
    $('input[name="display"]').change(calculateTotalPrice);
    $('#rim').change(calculateTotalPrice);
    $('#brakes').change(calculateTotalPrice);
    
    // Начальный расчет
    calculateTotalPrice();
});
</script>
```

## 3. Простая админ-панель для просмотра заказов

### Создать AdminController.php:
```php
<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function orders()
    {
        $orders = Order::with(['kit', 'display', 'battery', 'brakes'])
                      ->orderBy('created_at', 'desc')
                      ->paginate(20);
        
        return view('admin.orders', compact('orders'));
    }

    public function orderShow($id)
    {
        $order = Order::with(['kit', 'display', 'battery', 'brakes'])->findOrFail($id);
        return view('admin.order-show', compact('order'));
    }

    public function orderUpdateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->order_status = $request->status;
        $order->save();
        
        return redirect()->back()->with('success', 'Статус заказа обновлен');
    }
}
```

### Добавить маршруты в web.php:
```php
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/orders/{id}', [AdminController::class, 'orderShow'])->name('admin.orders.show');
    Route::post('/orders/{id}/status', [AdminController::class, 'orderUpdateStatus'])->name('admin.orders.status');
});
```

## 4. Разблокировать выбор батареи

### В configurator.blade.php изменить:
```html
<select id="battery" name="battery" class="form-control text-1 h-auto py-2">
    @foreach($products as $product)
        @if($product->type_id == 3)
            <option value="{{$product->id}}" price="{{$product->price}}">
                {{$product->name}} - {{$product->price}} грн
            </option>
        @endif
    @endforeach
</select>
```

## 5. Email уведомления

### Создать app/Mail/OrderCreated.php:
```php
<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('Новый заказ #' . $this->order->id)
                    ->view('emails.order-created');
    }
}
```

### Добавить в .env:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
ADMIN_EMAIL=admin@example.com
```

Эти исправления позволят запустить базовый функционал уже в текущем проекте.
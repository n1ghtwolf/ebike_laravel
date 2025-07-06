# План миграции на Laravel 11

## Неделя 1: Базовая структура
1. **Создание нового проекта Laravel 11**
   ```bash
   composer create-project laravel/laravel ebike-configurator
   cd ebike-configurator
   composer require filament/filament
   composer require livewire/livewire
   ```

2. **Перенос миграций и моделей**
   - Скопировать и адаптировать миграции
   - Обновить модели под Laravel 11
   - Настроить связи и валидацию

3. **Установка Filament Admin**
   - Создать ресурсы для Products, Orders, Users
   - Настроить права доступа

## Неделя 2: Перенос дизайна
1. **Интеграция верстки**
   - Перенести HTML/CSS из текущего проекта
   - Конвертировать в Blade компоненты
   - Настроить Vite для сборки

2. **Создание Livewire компонентов**
   - ConfiguratorComponent для конфигуратора
   - OrderFormComponent для формы заказа
   - PriceCalculatorComponent для расчета цены

## Неделя 3: Функционал
1. **Конфигуратор**
   ```php
   // app/Livewire/Configurator.php
   class Configurator extends Component
   {
       public $selectedKit;
       public $selectedDisplay;
       public $selectedBattery;
       public $selectedBrakes;
       public $rimSize;
       public $totalPrice = 0;

       public function updatedSelectedDisplay()
       {
           $this->calculatePrice();
       }

       public function calculatePrice()
       {
           // Логика расчета цены
       }
   }
   ```

2. **Обработка заказов**
   - Email уведомления
   - Telegram бот для уведомлений
   - Статусы заказов

## Неделя 4: Дополнительный функционал
1. **SEO и производительность**
   - Meta теги
   - Sitemap
   - Кеширование

2. **Платежные системы**
   - LiqPay
   - Portmone
   - Наложенный платеж

3. **Аналитика**
   - Google Analytics
   - Facebook Pixel
   - Дашборд продаж в админке

## Технологии для нового проекта

### Backend:
- Laravel 11
- Filament 3.x для админ-панели
- Livewire 3.x для реактивности
- Spatie Media Library для изображений
- Laravel Sanctum для API

### Frontend:
- Tailwind CSS 3.x
- Alpine.js
- Vite

### Инфраструктура:
- Redis для кеширования
- Queue для email
- Telescope для дебага

## Структура проекта
```
app/
├── Filament/
│   └── Resources/
│       ├── ProductResource.php
│       ├── OrderResource.php
│       └── UserResource.php
├── Livewire/
│   ├── Configurator.php
│   ├── OrderForm.php
│   └── PriceCalculator.php
├── Models/
│   ├── Product.php
│   ├── Order.php
│   ├── ProductType.php
│   └── OrderItem.php
├── Services/
│   ├── OrderService.php
│   ├── PriceService.php
│   └── NotificationService.php
└── Mail/
    ├── OrderCreated.php
    └── OrderStatusChanged.php
```

## Примерная стоимость разработки
- Junior разработчик: $1,500-2,500
- Middle разработчик: $3,000-4,500
- Senior разработчик: $5,000-7,000

## Дополнительные улучшения
1. **Мультиязычность** (укр/рус/англ)
2. **Калькулятор дальности** на одном заряде
3. **3D визуализация** велосипеда
4. **Отзывы и рейтинги**
5. **Блог** с SEO статьями
6. **Интеграция с CRM**
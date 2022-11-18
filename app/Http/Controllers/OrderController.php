<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderPostRequest;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\NoReturn;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    private array $validated;

//    public function __construct(private OrderPostRequest $request
//    ) {
//    }

    public function index(): View
    {
        return view('shop_partials.dia_make_order');
    }

    #[NoReturn] public function create(OrderPostRequest $request): void
    {
//        $this->request->validated();
        echo '<pre>';
//        $this->validated = $this->request->validate([
//            'name' => 'required|max:25|',
//            'email' => 'required|email',
//            'mobile_number' => 'required|regex:/^(\+38)[0-9]{10}|(38)[0-9]{10}|(8)[0-9]{10}|[0-9]{10}$/',
////            'mobile_number' => 'required|regex:/^(\+38)[0-9]{10}$/',
//            'message' => 'max:255',
//            'kit' => 'required|numeric|max:3',
//            'brakes' => 'required|numeric|max:3',
//            'rim' => 'required|numeric|max:3',
//            'battery' => 'required|numeric|max:10',
//        ]);
//        var_dump($this->request->input());
        var_dump($request->validated());
//        die;
//        var_dump($validated);
        die;
    }
}

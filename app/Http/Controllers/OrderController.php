<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderPostRequest;
use App\Models\Order;
use JetBrains\PhpStorm\NoReturn;

class OrderController extends Controller
{
    public function __construct(
        private OrderPostRequest $request,
        private Order $orders
    )
    {
    }
    public function index (){
        return view('shop_partials.dia_make_order');
    }
    #[NoReturn] public function create(): void
    {
//        $this->request->validated();
        echo '<pre>';
//        var_dump($this->request->input());die;
        var_dump($this->request->validated());
        die;
    }
}

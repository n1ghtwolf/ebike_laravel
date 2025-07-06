<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderPostRequest;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function index(): View
    {
        return view('shop_partials.dia_make_order');
    }

    public function create(OrderPostRequest $request): RedirectResponse
    {
        $order = Order::create($request->validated());

        return redirect()->route('order.confirm')->with('success', 'Ваш заказ №' . $order->id . ' принят.');
    }
}
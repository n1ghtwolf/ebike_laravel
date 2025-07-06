<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderPostRequest;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(): View
    {
        return view('order_confirm');
    }

    public function create(OrderPostRequest $request): RedirectResponse
    {
        $order = Order::create($request->validated());

        return redirect()->route('order.confirm')->with('success', 'Ваш заказ №' . $order->id . ' принят.');
    }

    /**
     * Return the order form (used inside modal) with pre-selected products.
     */
    public function form(Request $request): View
    {
        return view('order.form', [
            'kit_id' => $request->input('kit_id'),
            'display_id' => $request->input('display_id'),
            'brakes_id' => $request->input('brakes_id'),
            'battery_id' => $request->input('battery_id'),
        ]);
    }
}
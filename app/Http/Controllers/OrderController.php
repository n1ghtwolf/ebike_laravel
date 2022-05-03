<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderPostRequest;
use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    public function __construct(
        private        readonly OrderPostRequest $request,
        private Orders $orders
    )
    {
    }

    public function makeOrder()
    {
//        $this->request->validated();
        echo '<pre>';
//        var_dump($this->request->input());die;
        var_dump($this->request->validated());
        die;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderPostRequest;
use App\Models\Orders;
use JetBrains\PhpStorm\NoReturn;

class OrderController extends Controller
{
    public function __construct(
        private readonly OrderPostRequest $request,
        private Orders $orders
    )
    {
    }

    public #[NoReturn] function create(): void
    {
//        $this->request->validated();
        echo '<pre>';
//        var_dump($this->request->input());die;
        var_dump($this->request->validated());
        die;
    }
}

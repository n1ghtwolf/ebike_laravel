<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;


class DeliveryController extends Controller
{
    public function index (): View
    {
        return view('delivery');
    }
}

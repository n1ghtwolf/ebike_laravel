<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ConfiguratorController extends Controller
{
    public function index(): View
    {
        return view('configurator', ['products' => Product::all()]);
    }
}

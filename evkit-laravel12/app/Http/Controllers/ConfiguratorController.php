<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ConfiguratorController extends Controller
{
    /**
     * Display configurator page with all products.
     */
    public function index(): View
    {
        $types = \App\Models\ProductType::with('products')->get()->keyBy('name');

        return view('configurator', [
            'types' => $types,
        ]);
    }
}
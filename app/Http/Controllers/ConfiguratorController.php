<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ConfiguratorController extends Controller
{

    public function submit()
    {
        return view('configurator');
    }
    public function index()
    {
        return view('configurator', ['products'=>(new \App\Models\Product)->getAll()]);
    }
}

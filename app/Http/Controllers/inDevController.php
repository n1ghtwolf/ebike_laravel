<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class inDevController extends Controller
{
    public function index():View
    {
        return view('inDevelopment');
    }
}

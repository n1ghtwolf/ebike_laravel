<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ConfiguratorController extends Controller
{
    public function index(): View
    {
        $products = [(object)[
            'id'    =>  1,
            'name' => 'Мотор колесо 250w',
            'type_id' => 1,
            'price' => 75,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
            'id'    =>  2,
            'name' => 'Мотор колесо 500w',
            'type_id' => 1,
            'price' => 100,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
            'id'    =>  1,
            'name' => 'Мотор колесо 250w',
            'type_id' => 1,
            'price' => 50,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
            'id'    =>  1,
            'name' => 'центральный мотор 500w',
            'type_id' => 1,
            'price' => 250,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
            'id'    =>  1,
            'name' => 'дисплей 1',
            'type_id' => 2,
            'price' => 50,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
            'id'    =>  2,
            'name' => 'дисплей 2',
            'type_id' => 2,
            'price' => 100,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
            'id'    =>  2,
            'name' => 'дисплей 3',
            'type_id' => 2,
            'price' => 150,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],
            (object)[
                'id'    =>  3,
                'name' => 'дисплей 4',
                'type_id' => 2,
                'price' => 150,
                'img'   =>  'https://img.icons8.com/ios/344/he.png'
            ],(object)[
                'id'    =>  3,
                'name' => 'дисплей 5',
                'type_id' => 2,
                'price' => 150,
                'img'   =>  'https://img.icons8.com/ios/344/he.png'
            ],(object)[
                'id'    =>  3,
                'name' => 'дисплей 6',
                'type_id' => 2,
                'price' => 150,
                'img'   =>  'https://img.icons8.com/ios/344/he.png'
            ],(object)[
                'id'    =>  1,
            'name' => 'Курок газа',
            'type_id' => 3,
            'price' => 15,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
                'id'    =>  1,
            'name' => 'батарея 500в',
            'type_id' => 5,
            'price' => 200,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
                'id'    =>  1,
            'name' => 'батарея 750в',
            'type_id' => 5,
            'price' => 400,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ],(object)[
                'id'    =>  1,
            'name' => 'батарея 950в',
            'type_id' => 5,
            'price' => 500,
            'img'   =>  'https://img.icons8.com/ios/344/he.png'
        ]];

//        $products = array_map(function ($p) { $p->id = 1; return $p;}, $products);

        return view('configurator', ['products' => $products]);
    }
}

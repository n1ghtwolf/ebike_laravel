<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Мотор колесо 250w',
                'type_id' => 1,
                'price' => 75,
                'img' => ''
            ],
            [
                'name' => 'Мотор колесо 500w',
                'type_id' => 1,
                'price' => 100,
                'img' => ''
            ],
            [
                'name' => 'Мотор колесо 250w',
                'type_id' => 1,
                'price' => 50,
                'img' => ''
            ],
            [
                'name' => 'центральный мотор 500w',
                'type_id' => 1,
                'price' => 250,
                'img' => ''
            ],
            [
                'name' => '790',
                'type_id' => 2,
                'price' => 50,
                'img' => 'img/products/displays/displej790-100x100.jpg'

            ],
            [
                'name' => 'c965',
                'type_id' => 2,
                'price' => 100,
                'img' => 'img/products/displays/disp965-100x100.jpg'
            ],
            [
                'name' => 'c500',
                'type_id' => 2,
                'price' => 150,
                'img' => 'img/products/displays/s500-100x100.jpg'
            ],   [
                'name' => '860',
                'type_id' => 2,
                'price' => 150,
                'img' => 'img/products/displays/disp860C-100x100.jpg'
            ],   [
                'name' => 'DPC18',
                'type_id' => 2,
                'price' => 150,
                'img' => 'img/products/displays/dispdpc18-100x100.jpg'
            ],
            [
                'name' => 'Курок газа',
                'type_id' => 3,
                'price' => 15,
                'img' => ''
            ],
            [
                'name' => 'батарея 500в',
                'type_id' => 5,
                'price' => 200,
                'img' => ''
            ],
            [
                'name' => 'батарея 750в',
                'type_id' => 5,
                'price' => 400,
                'img' => ''
            ],
            [
                'name' => 'батарея 950в',
                'type_id' => 5,
                'price' => 500,
                'img' => ''
            ],
            [
                'name' => 'нет',
                'type_id' => 11,
                'price' => 10,
                'img' => ''
            ],
            [
                'name' => '26',
                'type_id' => 11,
                'price' => 10,
                'img' => ''
            ],
            [
                'name' => '27.5',
                'type_id' => 11,
                'price' => 10,
                'img' => ''
            ],
            [
                'name' => '28',
                'type_id' => 11,
                'price' => 10,
                'img' => ''
            ]
        ];

        Product::insert($products);
    }
}

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
                'name' => 'Передний 36v250w',
                'type_id' => 1,
                'price' => 75,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => 'Передний 36v500w',
                'type_id' => 1,
                'price' => 100,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => 'Задний 48v500w под кассету',
                'type_id' => 1,
                'price' => 50,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => 'Задний 48v500w под трещетку',
                'type_id' => 1,
                'price' => 250,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => 'Кареточный 36\48v250w',
                'type_id' => 1,
                'price' => 250,
                'img' => '',
                'available' => 1
            ],   [
                'name' => 'Кареточный 36\48v500w',
                'type_id' => 1,
                'price' => 250,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => 'Кареточный 48v750w',
                'type_id' => 1,
                'price' => 250,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => 'Кареточный 48v1000w',
                'type_id' => 1,
                'price' => 250,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => '790',
                'type_id' => 2,
                'price' => 50,
                'img' => 'img/products/displays/displej790-100x100.jpg',
                'available' => 0

            ],
            [
                'name' => 'c965',
                'type_id' => 2,
                'price' => 100,
                'img' => 'img/products/displays/disp965-100x100.jpg',
                'available' => 1
            ],
            [
                'name' => 'c500',
                'type_id' => 2,
                'price' => 150,
                'img' => 'img/products/displays/s500-100x100.jpg',
                'available' => 0
            ],   [
                'name' => '860',
                'type_id' => 2,
                'price' => 150,
                'img' => 'img/products/displays/disp860C-100x100.jpg',
                'available' => 0
            ],   [
                'name' => 'DPC18',
                'type_id' => 2,
                'price' => 150,
                'img' => 'img/products/displays/dispdpc18-100x100.jpg',
                'available' => 0
            ],

            [
                'name' => 'батарея 500в',
                'type_id' => 3,
                'price' => 200,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => 'батарея 750в',
                'type_id' => 3,
                'price' => 400,
                'img' => '',
                'available' => 1
            ],
            [
                'name' => 'батарея 950в',
                'type_id' => 3,
                'price' => 500,
                'img' => '',
                'available' => 1
            ],
        ];

        Product::insert($products);
    }
}

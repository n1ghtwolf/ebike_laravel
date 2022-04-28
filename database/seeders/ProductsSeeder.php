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
                'type' => 1,
                'price' => 75,
            ],
            [
                'name' => 'Мотор колесо 500w',
                'type' => 1,
                'price' => 100,
            ],
            [
                'name' => 'Мотор колесо 250w',
                'type' => 1,
                'price' => 50,
            ],
            [
                'name' => 'центральный мотор 500w',
                'type' => 1,
                'price' => 250,
            ],
            [
                'name' => 'дисплей 1',
                'type' => 2,
                'price' => 50,
            ],
            [
                'name' => 'дисплей 2',
                'type' => 2,
                'price' => 100,
            ],
            [
                'name' => 'дисплей 3',
                'type' => 2,
                'price' => 150,
            ],
            [
                'name' => 'Курок газа',
                'type' => 3,
                'price' => 15,
            ],
            [
                'name' => 'батарея 500в',
                'type' => 5,
                'price' => 200,
            ],
            [
                'name' => 'батарея 750в',
                'type' => 5,
                'price' => 400,
            ],
            [
                'name' => 'батарея 950в',
                'type' => 5,
                'price' => 500,
            ],
            [
                'name' => 'нет',
                'type' => 11,
                'price' => 10,
            ],
            [
                'name' => '26',
                'type' => 11,
                'price' => 10,
            ],
            [
                'name' => '27.5',
                'type' => 11,
                'price' => 10,
            ],
            [
                'name' => '28',
                'type' => 11,
                'price' => 10,
            ]
        ];

        Product::insert($products);
    }
}

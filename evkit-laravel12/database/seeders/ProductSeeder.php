<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // ensure product types exist
        $types = ProductType::pluck('id', 'name');

        $products = [
            [ // kit
                'type' => 'Kit',
                'name' => 'Задний 500w редукторный под кассету',
                'description' => 'Электро-колесо Bafang 500w',
                'img' => 'img/products/wheels/20191007_131026-removebg-preview-1000x1000.jpg',
                'price' => 6000,
                'currency' => 'UAH',
                'priority' => 1,
                'available' => 1,
            ],
            [ // display C965
                'type' => 'Display',
                'name' => 'C965',
                'description' => null,
                'img' => 'img/products/displays/c965.jpg',
                'price' => 1000,
                'currency' => 'UAH',
                'priority' => 1,
                'available' => 1,
            ],
            [ // display 850C
                'type' => 'Display',
                'name' => '850C',
                'description' => null,
                'img' => 'img/products/displays/850c.jpg',
                'price' => 2000,
                'currency' => 'UAH',
                'priority' => 2,
                'available' => 1,
            ],
            [ // brakes sensors cable
                'type' => 'Brakes',
                'name' => 'Тормозные датчики под тросики',
                'description' => null,
                'img' => 'img/products/brakes/brake-sensor.jpg',
                'price' => 300,
                'currency' => 'UAH',
                'priority' => 1,
                'available' => 1,
            ],
            [ // battery placeholder
                'type' => 'Battery',
                'name' => '48v 17Ah батарея (placeholder)',
                'description' => null,
                'img' => 'img/products/battery/battery.jpg',
                'price' => 9000,
                'currency' => 'UAH',
                'priority' => 1,
                'available' => 0,
            ],
        ];

        foreach ($products as $data) {
            Product::updateOrCreate(
                ['name' => $data['name']],
                [
                    'type_id' => $types[$data['type']] ?? null,
                    'description' => $data['description'],
                    'img' => $data['img'],
                    'price' => $data['price'],
                    'currency' => $data['currency'],
                    'priority' => $data['priority'],
                    'available' => $data['available'],
                ]
            );
        }
    }
}
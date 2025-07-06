<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            'Kit',
            'Display',
            'Battery',
            'Brakes',
        ];

        foreach ($types as $name) {
            ProductType::updateOrCreate(['name' => $name]);
        }
    }
}
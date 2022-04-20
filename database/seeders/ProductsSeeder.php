<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Мотор колесо 250w',
            'type' => 1,
            'price' => 75,
        ]); DB::table('products')->insert([
            'name' => 'Мотор колесо 500w',
            'type' => 1,
            'price' => 100,
        ]); DB::table('products')->insert([
            'name' => 'Мотор колесо 250w',
            'type' => 1,
            'price' => 50,
        ]); DB::table('products')->insert([
            'name' => 'центральный мотор 500w',
            'type' => 1,
            'price' => 250,
        ]);
        DB::table('products')->insert([
            'name' => 'дисплей 1',
            'type' => 2,
            'price' => 50,
        ]); DB::table('products')->insert([
            'name' => 'дисплей 2',
            'type' => 2,
            'price' => 100,
        ]); DB::table('products')->insert([
            'name' => 'дисплей 3',
            'type' => 2,
            'price' => 150,
        ]);
        DB::table('products')->insert([
            'name' => 'Курок газа',
            'type' => 3,
            'price' => 15,
        ]);
        DB::table('products')->insert([
            'name' => 'батарея 500в',
            'type' => 5,
            'price' => 200,
        ]); DB::table('products')->insert([
            'name' => 'батарея 750в',
            'type' => 5,
            'price' => 400,
        ]);
        DB::table('products')->insert([
            'name' => 'батарея 950в',
            'type' => 5,
            'price' => 500,
        ]);
    }
}

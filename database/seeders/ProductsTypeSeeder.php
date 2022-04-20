<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTypeSeeder extends Seeder
{
    static $names = [
        'Engine',
        'Display',
        'Throttle',
        'Brake sensors',
        'Battery',
        'Gear sensor',
        'Narrow',
        'Light',
        'Chain tranquil',
        'Installation Kit'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$names as $name) {
            DB::table('products_type')->insert([
                'name' => $name
            ]);
        }
    }
}

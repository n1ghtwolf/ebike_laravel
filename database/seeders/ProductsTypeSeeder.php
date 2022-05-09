<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTypeSeeder extends Seeder
{
    private static array $names = [
        'kit',
        'display',
        'battery'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::$names = array_map(function ($name) {
            return ['name' => $name];
        }, self::$names);

        DB::table('product_types')->insert(self::$names);
    }
}

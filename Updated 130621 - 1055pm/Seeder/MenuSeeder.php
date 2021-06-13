<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'name' => 'Shawarma',
            'price' => '4.5',
            'availability' => 'Yes',
            'cafe_id' => '1',
        ]);

        DB::table('menu')->insert([
            'name' => 'Nasi Lemak',
            'price' => '1.5',
            'availability' => 'Yes',
            'cafe_id' => '1',
        ]);

        DB::table('menu')->insert([
            'name' => 'Sup Ayam',
            'price' => '4.0',
            'availability' => 'No',
            'cafe_id' => '2',
        ]);

        DB::table('menu')->insert([
            'name' => 'Mi Goreng',
            'price' => '3.5',
            'availability' => 'Yes',
            'cafe_id' => '2',
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'status' => 'No',
            'customer_id' => '1',
            'rider_id' => '2',
            'menu_id' => '1',
        ]);

        DB::table('orders')->insert([
            'status' => 'No',
            'customer_id' => '1',
            'rider_id' => '1',
            'menu_id' => '2',
        ]);

        DB::table('orders')->insert([
            'status' => 'No',
            'customer_id' => '6',
            'rider_id' => '1',
            'menu_id' => '3',
        ]);

        DB::table('orders')->insert([
            'status' => 'No',
            'customer_id' => '10',
            'rider_id' => '1',
            'menu_id' => '4',
        ]);

        DB::table('orders')->insert([
            'status' => 'No',
            'customer_id' => '10',
            'rider_id' => null,
            'menu_id' => '3',
        ]);

        DB::table('orders')->insert([
            'status' => 'No',
            'customer_id' => '6',
            'rider_id' => null,
            'menu_id' => '2',
        ]);
    }
}

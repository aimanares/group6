<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cafes')->insert([
            'name' => 'Ali',
            'availability' => 'No',
        ]);

        DB::table('cafes')->insert([
            'name' => 'Bilal',
            'availability' => 'No',
        ]);

        DB::table('cafes')->insert([
            'name' => 'Hafsah',
            'availability' => 'No',
        ]);

        DB::table('cafes')->insert([
            'name' => 'Salahuddin',
            'availability' => 'No',
        ]);
    }
}

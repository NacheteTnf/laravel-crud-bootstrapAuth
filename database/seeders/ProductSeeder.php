<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Iphone 13',
            'description' => 'Mobile Phone Apple',
            'amount' => 980
        ]);
        DB::table('products')->insert([
            'name' => 'Ipad Pro 11',
            'description' => 'Table Apple',
            'amount' => 980
        ]);
        DB::table('products')->insert([
            'name' => 'Playstation 5',
            'description' => 'Videoconsole',
            'amount' => 980
        ]);
    }
}

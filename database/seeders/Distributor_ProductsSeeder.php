<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Distributor_ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distributor_products')->insert([
        	'id' => 5,
        	'product_id' => '5',
        	'distributor_id' => '1',
            'price' => 'Rp. 840000'        	
        ]);
    }
}

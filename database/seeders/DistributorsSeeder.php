<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DistributorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distributors')->insert([
        	'id' => 5,
        	'code' => 'disb005',
        	'name' => 'PT Bank Central Asia Tbk.',
            'address' => 'Jl Raya Mastrip Kebraon 118, Jawa Timur'        	
        ]);
    }
}
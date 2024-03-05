<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $jml = 50;
        // for($i = 0; $i<$jml; $i++) {
        //     DB::table('item')->insert([
        //         'item_name' => Str::random(25),
        //         'item_type' => Str::random(10),
        //         'item_price' => rand(10000, 15000),
        //         'item_desc' => Str::random(25),
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }
    }
}

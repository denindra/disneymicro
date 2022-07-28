<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TwitterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('microsite_counter')->insert([
            'id'             => 1,
            'tweet_counter'  => 0,
            'created_at'     => now()
        ]);
    }
}

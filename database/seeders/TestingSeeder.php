<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('testing')->insert([
            'id'             => 1,
            'tweet_counter'  => 0,
            'created_at'     => now()
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => "دولار",
            'symbol' => "$"
        ]);
      
        DB::table('currencies')->insert([
            'name' => "دينار",
            'symbol' => "DA"
        ]);
        DB::table('currencies')->insert([
            'name' => "أورو",
            'symbol' => "EUR"
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class WilayaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayas')->insert([
            'id' => 1,
            'name_ar' => "أدرار",
        ]);
        DB::table('wilayas')->insert([
            'id' => 2,
            'name_ar' => "الشلف",
        ]);
        DB::table('wilayas')->insert([
            'id' => 3,
            'name_ar' => "الأغوط",
        ]);
        DB::table('wilayas')->insert([
            'id' => 4,
            'name_ar' =>"أم البواقي",
        ]);
        DB::table('wilayas')->insert([
            'id' => 5,
            'name_ar' =>"باتنة",
        ]);
        DB::table('wilayas')->insert([
            'id' =>6,
            'name_ar' => "بجاية",
        ]);
        DB::table('wilayas')->insert([
            'id' => 7,
            'name_ar' => "بسكرة",
        ]);
    }
}

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
            'parent'=>"dz",
            'name_fr'=>"Adrar"
        ]);
        DB::table('wilayas')->insert([
            'id' => 2,
            'name_ar' => "الشلف",
            'parent'=>"dz",
            'name_fr'=>"Chlef"
        ]);
        DB::table('wilayas')->insert([
            'id' => 3,
            'name_ar' => "الأغوط",
            'parent'=>"dz",
            'name_fr'=>"El Aghouat"
        ]);
        DB::table('wilayas')->insert([
            'id' => 4,
            'name_ar' =>"أم البواقي",
            'parent'=>"dz",
            'name_fr'=>"Oum Bouagui"
        ]);
        DB::table('wilayas')->insert([
            'id' => 5,
            'name_ar' =>"باتنة",
            'parent'=>"dz",
            'name_fr'=>"Batna"
        ]);
        DB::table('wilayas')->insert([
            'id' =>6,
            'name_ar' => "بجاية",
            'parent'=>"dz",
            'name_fr'=>"Bejaia"
        ]);
        DB::table('wilayas')->insert([
            'id' => 7,
            'name_ar' => "بسكرة",
            'parent'=>"dz",
            'name_fr'=>"Biskra"
        ]);
        DB::table('wilayas')->insert([
            'id' => 8,
            'name_ar' => "بشار",
            'parent'=>"dz",
            'name_fr'=>"Bechar"
        ]);
        DB::table('wilayas')->insert([
            'id' => 9,
            'name_ar' => "البليدة",
            'parent'=>"dz",
            'name_fr'=>"Blida"
        ]);
        DB::table('wilayas')->insert([
            'id' => 10,
            'name_ar' => "البويرة",
            'parent'=>"dz",
            'name_fr'=>"Bouira"
        ]);
        DB::table('wilayas')->insert([
            'id' => 11,
            'name_ar' => "تامنغست",
            'parent'=>"dz",
            'name_fr'=>"Tamenghasset"
        ]);
        DB::table('wilayas')->insert([
            'id' => 12,
            'name_ar' => "تبسة",
            'parent'=>"dz",
            'name_fr'=>"Tebessa"
        ]);
        DB::table('wilayas')->insert([
            'id' => 13,
            'name_ar' => "تلمسان",
            'parent'=>"dz",
            'name_fr'=>"Telemcen"
        ]);
        DB::table('wilayas')->insert([
            'id' => 14,
            'name_ar' => "تيارت",
            'parent'=>"dz",
            'name_fr'=>"Tiaret"
        ]);
        DB::table('wilayas')->insert([
            'id' => 15,
            'name_ar' => "تيزي وزو",
            'parent'=>"dz",
            'name_fr'=>"Tizi-Ouzou"
        ]);
        DB::table('wilayas')->insert([
            'id' => 16,
            'name_ar' => "الجزائر العاصمة",
            'parent'=>"dz",
            'name_fr'=>"Alger"
        ]);
        DB::table('wilayas')->insert([
            'id' => 17,
            'name_ar' => "الجلفة",
            'parent'=>"dz",
            'name_fr'=>"Djelfa"
        ]);
        DB::table('wilayas')->insert([
            'id' => 18,
            'name_ar' => "جيجل",
            'parent'=>"dz",
            'name_fr'=>"Jijel"
            
        ]);
        DB::table('wilayas')->insert([
            'id' => 19,
            'name_ar' => "سطيف",
            'parent'=>"dz",
            'name_fr'=>"Setif"
        ]);
        DB::table('wilayas')->insert([
            'id' => 20,
            'name_ar' => "سعيدة",
            'parent'=>"dz",
            'name_fr'=>"Saida"
        ]);
        DB::table('wilayas')->insert([
            'id' => 21,
            'name_ar' => "سكيكدة",
            'parent'=>"dz",
            'name_fr'=>"Skikda"
        ]);
        DB::table('wilayas')->insert([
            'id' => 22,
            'name_ar' => "سيدي بلعباس",
            'parent'=>"dz",
            'name_fr'=>"Sidi-Belabes"
        ]);
        DB::table('wilayas')->insert([
            'id' => 23,
            'name_ar' => "عنابة",
            'parent'=>"dz",
            'name_fr'=>"Annaba"
        ]);
        DB::table('wilayas')->insert([
            'id' => 24,
            'name_ar' => "قالمة",
            'parent'=>"dz",
            'name_fr'=>"Guelma"
        ]);
        DB::table('wilayas')->insert([
            'id' => 25,
            'name_ar' => "قسنطينة",
            'parent'=>"dz",
            'name_fr'=>"Constantine"
        ]);
        DB::table('wilayas')->insert([
            'id' => 26,
            'name_ar' => "المدية",
            'parent'=>"dz",
            'name_fr'=>"Médéa"
        ]);
        DB::table('wilayas')->insert([
            'id' => 27,
            'name_ar' => "مستغانم",
            'parent'=>"dz",
            'name_fr'=>"Mostaganem"
        ]);
        DB::table('wilayas')->insert([
            'id' => 28,
            'name_ar' => "المسيلة",
            'parent'=>"dz",
            'name_fr'=>"M'sila"
        ]);
        DB::table('wilayas')->insert([
            'id' => 29,
            'name_ar' => "معسكر",
            'parent'=>"dz",
            'name_fr'=>"Mascara"
        ]);
        DB::table('wilayas')->insert([
            'id' => 30,
            'name_ar' => "ورقلة",
            'parent'=>"dz",
            'name_fr'=>"Ourgla"
        ]);
        DB::table('wilayas')->insert([
            'id' => 31,
            'name_ar' => "وهران",
            'parent'=>"dz",
            'name_fr'=>"Oran"
        ]);
        DB::table('wilayas')->insert([
            'id' => 32,
            'name_ar' => "البيض",
            'parent'=>"dz",
            'name_fr'=>"El-Bayadh"
        ]);
        DB::table('wilayas')->insert([
            'id' => 33,
            'name_ar' => "إليزي",
            'parent'=>"dz",
            'name_fr'=>"Ilizi"
        ]);
        DB::table('wilayas')->insert([
            'id' => 34,
            'name_ar' => "برج بوعريريج",
            'parent'=>"dz",
            'name_fr'=>"Bourdj-Bouariridj"
        ]);
        DB::table('wilayas')->insert([
            'id' => 35,
            'name_ar' => "بومرداس",
            'parent'=>"dz",
            'name_fr'=>"Boumerdes"
        ]);
        DB::table('wilayas')->insert([
            'id' => 36,
            'name_ar' => "الطارف",
            'parent'=>"dz",
            'name_fr'=>"El-Taref"
        ]);
        DB::table('wilayas')->insert([
            'id' => 37,
            'name_ar' => "تيندوف",
            'parent'=>"dz",
            'name_fr'=>"Tindouf"
        ]);
        DB::table('wilayas')->insert([
            'id' => 38,
            'name_ar' => "تيسمسيلت",
            'parent'=>"dz",
            'name_fr'=>"Tissimssilet"
        ]);
        DB::table('wilayas')->insert([
            'id' => 39,
            'name_ar' => "وادي سوف",
            'parent'=>"dz",
            'name_fr'=>"El-Oued"
        ]);
        DB::table('wilayas')->insert([
            'id' => 40,
            'name_ar' => "خنشلة",
            'parent'=>"dz",
            'name_fr'=>"Khenchla"
        ]);
        DB::table('wilayas')->insert([
            'id' => 41,
            'name_ar' => "سوق أهراس",
            'parent'=>"dz",
            'name_fr'=>"Souk-Ahrass"
        ]);
        DB::table('wilayas')->insert([
            'id' => 42,
            'name_ar' => "تيبازة",
            'parent'=>"dz",
            'name_fr'=>"Tipaza"
        ]);
        DB::table('wilayas')->insert([
            'id' => 43,
            'name_ar' => "ميلة",
            'parent'=>"dz",
            'name_fr'=>"Mila"
        ]);
        DB::table('wilayas')->insert([
            'id' => 44,
            'name_ar' => "عين الدفلى",
            'parent'=>"dz",
            'name_fr'=>"Ain-Defla"
        ]);
        DB::table('wilayas')->insert([
            'id' => 45,
            'name_ar' => "عين تيموشنت",
            'parent'=>"dz",
            'name_fr'=>"Ain-Timouchent"
        ]);
        DB::table('wilayas')->insert([
            'id' => 46,
            'name_ar' => "النعامة",
            'parent'=>"dz",
            'name_fr'=>"El-Naama"
        ]);
        DB::table('wilayas')->insert([
            'id' => 47,
            'name_ar' => "غرداية",
            'parent'=>"dz",
            'name_fr'=>"Gardaia"
        ]);
        DB::table('wilayas')->insert([
            'id' => 48,
            'name_ar' => "غليزان",
            'parent'=>"dz",
            'name_fr'=>"Ghilizene"
        ]);


    }
}

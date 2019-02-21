<?php

use Illuminate\Database\Seeder;
use App\Helpers\helper;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = "حبوب";
        DB::table('categories')->insert([
            'id' => 1,
            'name' => $cat,
            'parent' => 0,
            'slug' => helper::slug($cat),
        ]);

        $cat = "خضر و فواكه";
        DB::table('categories')->insert([
            'id' => 2,
            'name' => $cat,
            'parent' => 0,
            'slug' => helper::slug($cat),
        ]);
        $cat = "عسل و زيت";
        DB::table('categories')->insert([
            'id' => 3,
            'name' =>$cat,
            'parent' => 0,
            'slug' => helper::slug($cat),
        ]);

  $cat = "مواشي";
        DB::table('categories')->insert([
            'id' => 4,
            'name' =>$cat,
            'parent' => 0,
            'slug' => helper::slug($cat),
        ]);
   $cat = "حليب و مشتقاته";
        DB::table('categories')->insert([
            'id' => 5,
            'name' => $cat,
            'parent' => 0,
            'slug' => helper::slug($cat),
        ]);
        $cat = " أعلاف ";
        DB::table('categories')->insert([
            'id' => 6,
            'name' => $cat,
            'parent' => 0,
            'slug' => helper::slug($cat),
        ]);
      

      
      
        $cat = "بذور و أسمدة";
        DB::table('categories')->insert([
            'id' =>7,
            'name' => $cat,
            'parent' => 0,
            'slug' => helper::slug($cat),
        ]);

        $cat = "خدمات فلاحية";
        DB::table('categories')->insert([
            'id' => 8,
            'name' => $cat,
            'parent' => 0,
            'slug' => helper::slug($cat),
        ]);
     

    }
}

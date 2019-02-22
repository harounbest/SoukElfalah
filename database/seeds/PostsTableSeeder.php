<?php

use Illuminate\Database\Seeder;
use App\Helpers\helper;
use Faker\Factory as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(app\models\Post::class,20)->create();
        //factory(app\Models\Post::class,20)->create();
       /* $faker = Faker::create();
       
        for ($i = 0; $i < 5; $i++) {
            $title = $faker->sentence;
            $slug = helper::slug($title);
        DB::table('posts')->insert([
        'title' => $faker->sentence,
        'slug'       => $slug,
        'body' =>$faker->paragraph ,
        'is_published' =>$faker->boolean,
        'excerpt' => $faker->sentences(3,true), // secret
        'user_id' => rand(1, 5),
        'created_at'=>\Carbon\Carbon::createFromDate(2017,rand(1,12),rand(1,28))

        ]);
    }*/
}
}

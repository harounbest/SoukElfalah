<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            AdsTableSeeder::class,
            FavoriteTableSeeder::class,
            WilayaTableSeeder::class,
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            CurrencyTableSeeder::class,
            ImageTableSeeder::class,
            PostsTableSeeder::class
        ]);
    }
}

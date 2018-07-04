<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
          AuthorsTableSeeder::class,
        //  Instru_AuthorTableSeeder::class,
          InstrusTableSeeder::class,
          MaterialsTableSeeder::class,
          Author_InstruTableSeeder::class,
      ]);
    }
}

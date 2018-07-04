<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('authors')->insert([
        [
          'lastname' => 'Pierre',
        ],
        [
          'lastname' => 'Paul',
        ],
        [
          'lastname' => 'Jack',
        ]
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class Instru_AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('instru_author')->insert([
      [
        'author_id' => 1,
        'instru_id' => 1,
      ],
      [
        'author_id' => 1,
        'instru_id' => 2,
      ],
      [
        'author_id' => 1,
        'instru_id' => 3,
      ],
      [
          'author_id' => 1,
          'instru_id' => 4,
      ],
      [
          'author_id' => 2,
          'instru_id' => 5,
      ],
    ]);
    }
}

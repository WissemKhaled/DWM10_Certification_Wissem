<?php

use Illuminate\Database\Seeder;

class InstrusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instrus')->insert([
           [
            'title' => 'clarinette',
            'price' => 25,
            'materials_id' => 1,
            'stock' => 10,
           ],
           [
             'title' => 'Saxophone',
             'price' => 40,
             'materials_id' => 1,
             'stock' => 10,
           ],
           [
             'title' => 'Flûte',
             'price' => 10,
             'materials_id' => 2,
             'stock' => 10,
           ],
           [
             'title' => 'Ocarina',
             'price' => 100,
             'materials_id' => 3,
             'stock' => 10,
           ],
           [
             'title' => 'Violon',
             'price' => 42,
             'materials_id' => 2,
             'stock' => 10,
           ]
         ]);
    }
}

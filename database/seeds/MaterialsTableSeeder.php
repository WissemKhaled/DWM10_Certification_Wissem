<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('materials')->insert([
         [
          'name' => 'Cuivre',
         ],
         [
          'name' => 'Bois',
         ],
         [
          'name' => 'Terre Cuite',
         ]
       ]);
    }
}

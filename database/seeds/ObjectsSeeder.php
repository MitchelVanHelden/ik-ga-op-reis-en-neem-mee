<?php

use Illuminate\Database\Seeder;

class ObjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objects')->insert([
        array('name' => 'Zonnebrand', 'weight' => '3'),
        array('name' => 'Zwembroek', 'weight' => '4'),
        array('name' => 'Camera', 'weight' => '7'),
        array('name' => 'Toilettas', 'weight' => '9'),
        array('name' => 'Carkit', 'weight' => '12'),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        array('name' => 'camping'),
        array('name' => 'strand'),
        array('name' => 'bezichtigingen'),
        array('name' => 'roadtrip'),
        array('name' => 'hotel'),

        ]);
    }
}

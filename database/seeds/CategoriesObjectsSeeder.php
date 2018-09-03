<?php

use Illuminate\Database\Seeder;

class CategoriesObjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories_objects')->insert([
    		'categories_id' => "1",
    		'objects_id' => "4",
    	]);

    	DB::table('categories_objects')->insert([
    		'categories_id' => "2",
    		'objects_id' => "1",
    	]);

      	DB::table('categories_objects')->insert([
    		'categories_id' => "2",
    		'objects_id' => "2",
    	]);

    	DB::table('categories_objects')->insert([
    		'categories_id' => "3",
    		'objects_id' => "3",
    	]);

    	DB::table('categories_objects')->insert([
    		'categories_id' => "4",
    		'objects_id' => "5",
    	]);
    	DB::table('categories_objects')->insert([
    		'categories_id' => "4",
    		'objects_id' => "4",
    	]);
    	DB::table('categories_objects')->insert([
    		'categories_id' => "5",
    		'objects_id' => "4",
    	]);

    }
}

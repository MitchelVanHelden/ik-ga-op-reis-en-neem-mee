<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\objects;


class CategoryController extends Controller
{
   public function index(){
        $categories = categories::All();
        return view('categories.index', compact('categories'));
    }
    	public function ShowObjects($id)
	{		
		$categories = Categories::findOrFail($id);		
     	return view('categories.categories_objects', compact('categories'));
	}
}

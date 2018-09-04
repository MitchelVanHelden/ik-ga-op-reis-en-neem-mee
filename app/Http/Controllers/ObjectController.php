<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\objects;
use App\Categories;

class ObjectController extends Controller
{
    public function index(){
        $object = objects::All();
        return view('object.index', compact('object'));
    }
    public function view($id){
    	$object = objects::findorfail($id);
    	return view('object.details', compact('object'));
    }
}

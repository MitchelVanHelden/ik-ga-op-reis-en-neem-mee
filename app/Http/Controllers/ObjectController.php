<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\objects;

class ObjectController extends Controller
{
    public function index(){
        $object = objects::All();
        return view('object.index', compact('object'));
    }
}

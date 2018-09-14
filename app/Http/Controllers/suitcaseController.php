<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\suitcase;
use App\Categories;
use App\objects;



class suitcaseController extends Controller
{
    public function getobject(Request $request, $id){    	
    	$objects = objects::findorfail($id);
    	$suitcase = new suitcase ($request->session());
        $suitcase->add($objects->id);
        return redirect('objects');
    }
    public function getsuitcase(Request $request){
        $suitcase = new suitcase($request->session());
        $items = $suitcase->getItems();
        return view('suitcase.index', compact('items'));
    }
    public function addobject(){
        return redirect('objects');
    }
    public function TotalWeight(Request $request){
    	$suitcase = new suitcase($request->session());
        $weight = $suitcase->TotalWeight();

    	//echo $suitcase->TotalWeight();

        


    }
}

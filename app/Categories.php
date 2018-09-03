<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categories extends Model

{
	public function objects(){
		return $this->belongsToMany('App\objects');
	}
}

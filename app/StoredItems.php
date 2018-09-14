<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\suitcase;

class storedItems extends model
{
	public $objectsId;
	public $qty = 0;



	public function __construct($objectsId, $qty) {
		$this->objectsId = $objectsId;
		$this->qty = $qty;

	}
}

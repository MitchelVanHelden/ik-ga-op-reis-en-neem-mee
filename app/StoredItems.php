<?php

namespace App;
use App\suitcase;

use Illuminate\Database\Eloquent\Model;

class storedItems extends model
{
	public $objectsId;
	public $qty = 0;


	public function __construct($objectsId, $qty) {
		$this->objectsId = $objectsId;
		$this->qty = $qty;
	}
}

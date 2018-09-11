<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\objects;
use App\storedItems;
use session;

class suitcase extends Model
{
	const suitcase = 'suitcase';
	public $session;
	public $storedItems = [];


	public function __construct($session){
		$this->session = session();
		if (!empty($session)) {
			$this->storedItems = $this->session->get(self::suitcase);
		}
	}

	public function add($objectsId) {
		$object = objects::findOrFail($objectsId);
		$qty = 0;
		$qty++;
		if ($object != NULL) {
			$storedItems = new storedItems($object, $qty);
			$this->storedItems = session()->push('suitcase', $storedItems);
		} 
	}

	public function getItems() {
		return $this->storedItems;

	}
	public function TotalWeight(){
		
		$weight = 0;

		foreach ($suitcase as $name => $weight) {
			echo($weight);
		}

		return $weight;
	}
}
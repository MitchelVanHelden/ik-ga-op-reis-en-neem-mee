<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\objects;
use App\StoredItems;
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
			$storedItem = new storedItems($object, $qty);
			$this->storedItems = session()->push('suitcase', $storedItem);
		} 
	}

	public function getItems() {
		return $this->storedItems;

	}

	public function TotalWeight(){

		$weight = 0;
			
		foreach ($this->storedItems as $storedItem) {
		$object = objects::findOrFail($storedItem->objectsId);
		$itemId = $storedItem->objectsId;
		$qty = 0;
		$qty = $storedItem->qty;
		$itemId = $itemId->weight;
		$weight = $weight + $itemId;
		
		}
		
		return $weight;
	}
}
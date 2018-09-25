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
		// als id al in koffer zit aantal + 1 en gewicht * 2
		// kijken of id al in de koffer zit
		if ($object == $object){
		// zo ja gewicht * 2 en aantal + 1 	


		}
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
			//dd($storedItem);
			//$itemId = $storedItem->objectsId;
			//$qty = 0;
			//$qty = $storedItem->qty;
			//$itemId = $itemId->weight;
			//  item ophalen 
			$itemWeight = $storedItem->objectsId->weight;
			//  gewicht van item ophalen
			//$itemWeight = $itemId->weight;
			// de hoeveelheid van een item ophalen
			$qty = $storedItem->qty;
			// hoeveelheid items x gewicht
			$subWeight = $qty * $itemWeight;
			// totaal gewicht van alle items bij elkaar optellen
			$weight = $subWeight + $weight;
		
		}
		
		return $weight;
	}
	public function delete(){
		
		
		$itemId = $storedItem->objectsId;

		unset ($itemId);
		
	
	}
}
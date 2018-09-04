<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\objects;
use session;

class suitcase extends Model
{
	const suitcase = 'suitcase';
	public $session;
	public $storeItems = [];
	public $totalQty = 0;
	public $totalweight = 0;


	public function __construct($session){
		$this->session = session();
		if (!empty($session)) {
			$this->storeItems = $this->session->get(self::suitcase);
		}
	}
	    public function add($objectsid) {
        $objects = objects::findOrFail($objectsid);
        $qty = 0;
        $qty++;   
        if ($objects != NULL) {
            $storeItems = new StoreItems($objects, $qty);
            $this->storeItems = session()->push('suitcase', $storeItems);
            } 
    }

	public function getItems() {
		return $this->storeItems;
	}
}

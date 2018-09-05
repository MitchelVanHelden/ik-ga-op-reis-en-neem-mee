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

	    public function add($objectsid) {
        $object = objects::findOrFail($objectsid);
        $qty = 0;
        $qty++;
        if ($object != NULL) {
            $storedItems = new StoredItems($object, $qty);
            $this->storedItems = session()->push('suitcase', $storedItems);
        } 
    }
    	public function delete($id){


    	}

	public function getItems() {
		return $this->storedItems;

	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreItems extends Model
{
    public $objectsId;
   	public $qty = 0;

        public function __construct($objectsId, $qty) {
        $this->objectsId = $objectsId;
        $this->qty = $qty;
    }
}

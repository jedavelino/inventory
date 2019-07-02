<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    /**
     * Get the transaction that owns the equipment
     */
    public function transaction()
    {
    	return $this->belongsTo('App\Transaction');
    }
}

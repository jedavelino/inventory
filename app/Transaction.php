<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * Get equipments
     */
    public function equipments()
    {
    	return $this->hasMany('App\Equipment');
    }
}

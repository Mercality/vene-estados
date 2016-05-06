<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model 
{
	protected $hidden = array('created_at', 'updated_at');
    
	public function estado() {
		return $this->belongsTo('App\Estado');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
	protected $hidden = array('created_at', 'updated_at');

	public function municipio() {
		return $this->belongsTo('App\Municipio');
	}


}

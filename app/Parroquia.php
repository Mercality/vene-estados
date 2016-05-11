<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
	protected $hidden = array('created_at', 'updated_at', 'id', 'municipio_id');

	public function municipio() {
		return $this->belongsTo('municipio');
	}


}

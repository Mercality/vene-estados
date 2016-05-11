<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
	protected $hidden = array('created_at', 'updated_at', 'id', 'estado_id');

	public function estado() {
		return $this->belongsTo('App\Estado');
	}

	public function parroquias() {
		return $this->hasMany('App\Parroquia');
	}


}

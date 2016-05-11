<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $hidden = array('created_at', 'updated_at', 'id');

    public function municipios() {
       return $this->hasMany('App\Municipio');
    }

    public function ciudades() {
       return $this->hasMany('App\Ciudad');
    }
}

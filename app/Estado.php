<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model 
{
    protected $hidden = array('created_at', 'updated_at');

    public function municipios() {
       return $this->hasMany('App\Municipio');
    }
}

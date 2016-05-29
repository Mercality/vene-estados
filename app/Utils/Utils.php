<?php

namespace App\Utils;

Class Utils {
	
	 public static function hideId($models) {
	 	if (isset($models->id)) {
	 		$models->addHidden(['id', 'estado_id', 'municipio_id']);
	 		if (isset($models['estado'])) static::hideId($models->estado);
	 	}
	 		
	 	else {
	        foreach($models as $model) {
	            $model->addHidden(['id', 'estado_id', 'municipio_id']);

	            if (isset($model['ciudades'])) static::hideId($model->ciudades);
	            if (isset($model['municipios'])) static::hideId($model->municipios);
	            if (isset($model['parroquias'])) static::hideId($model->parroquias);
	            if (isset($model['ciudadad'])) static::hideId($model->ciudadad);
	            if (isset($model['municipio'])) static::hideId($model->municipio);
	            if (isset($model['parroquia'])) static::hideId($model->parroquia);
	            if (isset($model['estado'])) static::hideId($model->estado);
	        }
        }
    }
}
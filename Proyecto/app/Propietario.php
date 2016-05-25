<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{

	public function infracciones() {
        return $this->hasMany('App\Infraccion');
    }

    public function vehiculos() {
        return $this->hasMany('App\Vehiculo');
    }

    protected $fillable = array('nombre', 'apellidos', 'ciudad', 'direccion', 'fecha_nac');

    protected $table = 'propietarios';
}

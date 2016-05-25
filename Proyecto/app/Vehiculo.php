<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public function modelo() {
        return $this->belongsTo('App\Modelo');
    }

    public function propietario() {
        return $this->belongsTo('App\Propietario');
    }

    protected $fillable = array('propietario_id', 'modelo_id', 'fecha_matricula');

    protected $table = 'vehiculos';
}

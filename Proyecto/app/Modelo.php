<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    public function vehiculos() {
        return $this->hasMany('App\Vehiculo');
    }

    public function marca() {
        return $this->belongsTo('App\Marca');
    }

    protected $fillable = array('marca_id', 'nombre', 'potencia');

    protected $table = 'modelos';
}

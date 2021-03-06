<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public function modelos() {
        return $this->hasMany('App\Modelo');
    }

    protected $fillable = array('nombre', 'direccion');

    protected $table = 'marcas';
}

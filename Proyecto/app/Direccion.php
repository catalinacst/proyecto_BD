<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    public function infracciones() {
        return $this->hasMany('App\Infraccion');
    }

    protected $fillable = array('carrera', 'kilometro');

    protected $table = 'direcciones';
}

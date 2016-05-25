<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    public function infracciones() {
        return $this->hasMany('App\Infraccion');
    }

    protected $fillable = array('nombre', 'apellidos');

    protected $table = 'agentes';
}

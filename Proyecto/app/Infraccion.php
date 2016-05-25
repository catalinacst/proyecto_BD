<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    public function agente() {
        return $this->belongsTo('App\Agente');
    }

    public function direccion() {
        return $this->belongsTo('App\Direccion');
    }

    public function propietario() {
        return $this->belongsTo('App\Propietario');
    }

    protected $fillable = array('propietario_id', 'agente_id', 'direccion_id', 'articulo', 'valor_total');

    protected $table = 'infracciones';
}

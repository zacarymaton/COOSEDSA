<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //
    protected $table='servicio';
    protected $fillable=["nombre_servicio","categoria_servicio","hrs_trabajo","costo_servicio","descripcion_servicio","estado"];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table='empleado';
    protected $fillable=["nombre_empleado","apellidos_empleado","fecha_naci_empleado","nro_carnet_empleado","direccion_empleado","telefono_empleado","ocupacion","valor_hr","foto_empleado","estado_empleado"];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }

}

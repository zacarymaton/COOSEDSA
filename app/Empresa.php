<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table='empresa';
    protected $fillable=["nombre_empresa","pagina_web","hr_atencion","region_departamento","direccion_empresa","telefono_empresa","id_servicio","id_empleado","estado"];

    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
}

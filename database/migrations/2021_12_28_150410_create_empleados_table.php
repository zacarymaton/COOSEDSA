<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_empleado');
            $table->string('apellidos_empleado');
            $table->date('fecha_naci_empleado');
            $table->string('nro_carnet_empleado');
            $table->string('direccion_empleado');
            $table->string('telefono_empleado');
            $table->string('ocupacion');
            $table->integer('valor_hr');
            $table->string('foto_empleado')->nullable();
            $table->string('estado_empleado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_servicio');
            $table->unsignedInteger('id_empleado');
            $table->string('nombre_empresa');
            $table->string('pagina_web');
            $table->time('hr_atencion')->nullable();
            $table->string('region_departamento')->nullable();
            $table->string('direccion_empresa')->nullable();
            $table->string('telefono_empresa')->nullable();
            $table->string('estado');
            $table->timestamps();
            $table->foreign('id_servicio')->references('id')->on('servicio');
            $table->foreign('id_empleado')->references('id')->on('empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}

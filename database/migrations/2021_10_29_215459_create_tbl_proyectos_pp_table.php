<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProyectosPpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_proyectos_pp', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proyecto');
            $table->string('impacto');
            $table->string('componentes');
            $table->string('img_croquis')->nullable();
            $table->string('img_predio');
            $table->string('domicilio');
            $table->double('costo',9,2);
            $table->integer('poblacion_beneficiada');
            $table->string('poblacion_beneficiada_esp');
            // $table->enum('poblacion_beneficiada_esp',['TODA LA POBLACIÓN','PERSONAS CON DISCAPACIDAD','NIÑAS/OS','ADULTOS MAYORES','JÓVENES','MUJERES']);
            $table->string('tiempo_ejecucion');
            $table->string('vida_util');
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
        Schema::dropIfExists('tbl_proyectos_pp');
    }
}

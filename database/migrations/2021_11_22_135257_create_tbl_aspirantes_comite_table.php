<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAspirantesComiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_aspirantes_comite', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->date('fecha_nacimiento');
            $table->string('nacionalidad');
            $table->string('curp');
            $table->string('lugar_nacimiento');
            $table->string('domicilio_residencia');
            $table->string('telefono');
            $table->string('celular');
            $table->string('email');
            $table->string('tiempo_residencia');
            $table->boolean('actual_funcionario');
            $table->string('ocupacion');
            $table->string('grado_estudios');
            $table->string('nombre_asociacion')->nullable();
            $table->string('objeto_asociacion')->nullable();
            $table->string('colectivo_social')->nullable();
            $table->boolean('actividad_politica');
            $table->boolean('cargo_politico');
            $table->boolean('experiencia_proyectos');
            $table->integer('anos_experiencia')->nullable();
            $table->string('descripcion_logros')->nullable();
            $table->string('file_carta_motivos')->nullable();
            $table->string('file_carta_recom1')->nullable();
            $table->string('file_carta_recom2')->nullable();
            $table->string('file_carta_recom3')->nullable();
            $table->string('file_ficha_curricular')->nullable();
            $table->string('file_carta_manifestacion')->nullable();
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
        Schema::dropIfExists('tbl_aspirantes_comite');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_postulantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->char('sexo',1);
            $table->string('curp');
            $table->string('telefono');
            $table->string('correo');
            $table->string('domicilio');
            $table->string('integrante_pc')->nullable();
            $table->string('organizacion_social')->nullable();
            $table->char('reside_municipio',1);
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
        Schema::dropIfExists('tbl_postulantes');
    }
}

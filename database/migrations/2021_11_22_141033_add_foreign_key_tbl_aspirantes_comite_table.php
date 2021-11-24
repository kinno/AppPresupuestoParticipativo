<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTblAspirantesComiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tbl_aspirantes_comite',function(Blueprint $table){
            $table->bigInteger('id_municipio')->unsigned()->after('lugar_nacimiento');
            $table->foreign('id_municipio')->references('id')->on('cat_municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('tbl_aspirantes_comite',function(Blueprint $table){
            $table->dropForeign('tbl_aspirantes_comite_id_municipio_foreign');
        });
       
    }
}

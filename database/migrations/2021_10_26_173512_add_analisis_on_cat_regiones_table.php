<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnalisisOnCatRegionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cat_regiones', function (Blueprint $table) {
            $table->json('analisis')->nullable()->after('cve_region');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cat_regiones', function (Blueprint $table) {
            //
            $table->dropColumn('analisis');
        });
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatRubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_rubro_inversion')->insert([
            'descripcion' => 'Agua'
        ],[
            'descripcion' => 'Comunicaciones y Transportes'
        ],[
            'descripcion' => 'Electricidad'
        ],[
            'descripcion' => 'Turismo'
        ],[
            'descripcion' => 'Educación'
        ],[
            'descripcion' => 'Ciencia y Tecnología'
        ],[
            'descripcion' => 'Cultura'
        ],[
            'descripcion' => 'Deporte'
        ],[
            'descripcion' => 'Salud y Asistencia Social'
        ]);
    }
}

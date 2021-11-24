<?php

namespace Database\Seeders;

use App\Models\TblPostulantes;
use Illuminate\Database\Seeder;

class TblPostulantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TblPostulantes::factory(50)->create();
    }
}

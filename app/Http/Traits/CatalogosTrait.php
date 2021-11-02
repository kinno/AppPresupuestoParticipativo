<?php

namespace App\Http\Traits;
use App\Models\CatMunicipio;
use App\Models\CatRubroInversion;
use Database\Seeders\CatTipoProyecto;

trait CatalogosTrait{
    public function getMunicipios(){
        $municipios = CatMunicipio::all();
        $municipios->load('region');
        return $municipios;
    }

    public function getRubros(){
        $rubros = CatRubroInversion::all();
        $rubros->load('proyectos');
        return $rubros;
    }
}

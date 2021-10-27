<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CatMunicipio;

class CatMunicipioController extends Controller
{

        public function __construct()
        {
            
        }
    //
    public function index(){
        // $municipios = CatMunicipio::pluck('descripcion','id', 'region')->prepend('Seleccionar...')->toArray();
        $municipios = CatMunicipio::all();
        $municipios->load('region');
        return view("municipios",compact('municipios'));
    }

    public function conoce2(){
        // $municipios = CatMunicipio::pluck('descripcion','id', 'region')->prepend('Seleccionar...')->toArray();
        $municipios = CatMunicipio::all();
        $municipios->load('region');
        return view("municipios_vue",compact('municipios'));
    }


}

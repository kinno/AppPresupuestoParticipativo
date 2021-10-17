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
        return view("municipios",compact('municipios'));
    }


}

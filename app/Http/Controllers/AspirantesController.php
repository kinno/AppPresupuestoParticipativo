<?php

namespace App\Http\Controllers;
use App\Http\Traits\CatalogosTrait;
use Illuminate\Http\Request;

class AspirantesController extends Controller
{
    //

    use CatalogosTrait;

    public function registro()
    {
        $municipios = $this->getMunicipios();
        return view('aspirantes.formulario',compact('municipios'));
    }
}

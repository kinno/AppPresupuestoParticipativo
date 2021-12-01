<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CatalogosTrait;
use App\Http\Traits\WebserviceTrait;
use App\Models\CatMunicipio;
use App\Models\TblProyectosPP;

class VotacionesController extends Controller
{
    //
    use CatalogosTrait;
    use WebserviceTrait;

    public function index(){

        $municipios = $this->getMunicipios();
        return view('votaciones.index',compact('municipios'));
    }

    public function validaCurpYMunicipio(Request $request){

        $responseValidaCurp = $this->validaCurp($request->curp);

        if($responseValidaCurp->mensaje == "EXITO"){
            if($request->id_municipio != null){
                $data = [
                    'success'=>true,
                ];
            }else{
                $data = [
                    'success'=>false,
                    'response' => "Debe seleccionar un municipio"
                ];
            }
        }else{
            $data = [
                'success'=>false,
                'response'=>$responseValidaCurp->response[0]->descripcion,
            ];
           
        }
        return response()->json($data, 200);
    }

    public function validaCurpYMunicipioSinFiltro(Request $request){
        if($request->id_municipio != null){
            $data = [
                'success'=>true,
                'html'=>$this->getBoleta($request)
            ];
        }else{
            $data = [
                'success'=>false,
                'response' => "Debe seleccionar un municipio"
            ];
        }
        return response()->json($data, 200);
    }

    public function getBoleta(Request $request){
        // dd($request->id_municipio);
        // $request->id_municipio = 40;
        $municipio = CatMunicipio::where('id',$request->id_municipio)->first();
        $municipio->load('region');
        $proyectos = TblProyectosPP::where('id_municipio',$request->id_municipio)->get();
        // dd($proyectos);
        return view('votaciones.listado_boleta',compact('proyectos','municipio'))->render();
    }
}

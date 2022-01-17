<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CatalogosTrait;
use App\Http\Traits\WebserviceTrait;
use App\Models\CatMunicipio;
use App\Models\TblProyectosPP;
use App\Models\TblVotaciones;

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
            $voto = TblVotaciones::where('curp',$request->curp)->get();
            if($voto->count()>0){
                $data = [
                    'success'=>false,
                    'response' => "Ya has emitido tu voto. Gracias por participar."
                ];
            }else{
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
        $voto = TblVotaciones::where('curp',$request->curp)->get();
            if($voto->count()>0){
                $data = [
                    'success'=>false,
                    'response' => "Ya has emitido tu voto. Gracias por participar."
                ];
            }else{
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
            }
        return response()->json($data, 200);
    }

    public function getBoleta(Request $request){
        // dd($request);
        // $request->id_municipio = 40;
        $municipio = CatMunicipio::where('id',$request->id_municipio)->first();
        $municipio->load('region');
        $proyectos = TblProyectosPP::where('id_municipio',$request->id_municipio)->get();
        $curp = $request->curp;
        // dd($proyectos);
        return view('votaciones.listado_boleta',compact('proyectos','municipio','curp'))->render();
    }

    public function send(Request $request){
        // dd($request);
        $voto = new TblVotaciones;
        $voto->curp = $request->curp;
        $voto->id_proyecto_pp = $request->proyecto;
        $voto->save();

        return view('votaciones.resultado');
    }
}

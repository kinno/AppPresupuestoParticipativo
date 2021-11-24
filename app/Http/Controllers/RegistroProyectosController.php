<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroFormRequest;
use App\Http\Traits\CatalogosTrait;
use App\Http\Traits\WebserviceTrait;
use App\Models\TblPostulantes;
use App\Models\TblProyectosPP;
use App\Rules\ValidaCurpRule;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class RegistroProyectosController extends Controller
{
    //

    use CatalogosTrait, WebserviceTrait;

    public function index(){
        $municipios = $this->getMunicipios();
        $rubros = $this->getRubros();
        return view('registro.formulario',compact('municipios','rubros'));
        // return view('registro.index');
    }

    public function formulario(){
        // $municipios = $this->getMunicipios();
        // $rubros = $this->getRubros();
        // return view('registro.formulario',compact('municipios','rubros'));
    }

    public function buscarCURP(Request $request){
        $responseValidaCurp = $this->validaCurp($request->curp);
        
        if($responseValidaCurp->mensaje == "EXITO"){
            $nombre = $responseValidaCurp->response[0]->nombre." ".$responseValidaCurp->response[0]->apellidoPaterno." ".$responseValidaCurp->response[0]->apellidoMaterno;
            $postulante = TblPostulantes::where('curp',$request->curp)->first();
            if(is_null($postulante)){
                $data = [
                    'success'=>true,
                    'encontrado'=>false,
                    'nombre' => $nombre,
                ];
            return response()->json($data, 200);
            }else{
                $data = [
                    'success'=>true,
                    'encontrado'=>true,
                    'id_proyecto_pp'=>$postulante->proyectoPP->id
                ];
            return response()->json($data, 200);
            }
        }else{
            $data = [
                'success'=>false,
                'encontrado'=>false,
                'response'=>$responseValidaCurp->response[0]->descripcion,
            ];
            return response()->json($data, 200);
        }
        
       
    }

    public function buscarCURPSinFiltro(Request $request){
            $postulante = TblPostulantes::where('curp',$request->curp)->first();
            $nombre = "";
            if(is_null($postulante)){
                $data = [
                    'success'=>true,
                    'encontrado'=>false,
                    'nombre' => $nombre,
                ];
            return response()->json($data, 200);
            }else{
                $data = [
                    'success'=>true,
                    'encontrado'=>true,
                    'id_proyecto_pp'=>$postulante->proyectoPP->id
                ];
            return response()->json($data, 200);
            }
    }

    public function send(RegistroFormRequest $request){
        // dd(json_encode($request->poblacion_beneficiada_esp));
        $imagen = $request->file('img_predio')->store('public/imagenes/predios');
        $url = Storage::url($imagen);

        $proyecto_nuevo = new TblProyectosPP;
        $proyecto_nuevo->nombre_proyecto = $request->nombre_proyecto;
        $proyecto_nuevo->id_municipio = $request->id_municipio;
        $proyecto_nuevo->id_tipo_proyecto = $request->id_tipo_proyecto;
        $proyecto_nuevo->impacto = $request->impacto;
        $proyecto_nuevo->componentes = $request->componentes;
        $proyecto_nuevo->latlng = $request->latlng;
        $proyecto_nuevo->domicilio = $request->domicilio;
        $proyecto_nuevo->img_predio = $url;
        $proyecto_nuevo->costo = $request->costo;
        $proyecto_nuevo->poblacion_beneficiada = $request->poblacion_beneficiada;
        $proyecto_nuevo->poblacion_beneficiada_esp = json_encode($request->poblacion_beneficiada_esp);
        $proyecto_nuevo->tiempo_ejecucion = $request->tiempo_ejecucion;
        $proyecto_nuevo->vida_util = $request->vida_util;
        $proyecto_nuevo->save();

        $postulante = new TblPostulantes;
        $postulante->nombre = $request->nombre;
        $postulante->edad = $request->edad;
        $postulante->sexo = $request->sexo;
        $postulante->curp = $request->curp;
        $postulante->telefono = $request->telefono;
        $postulante->correo = $request->correo;
        $postulante->domicilio = $request->domicilio_notificaciones;
        $postulante->integrante_pc = $request->integrante_pc;
        $postulante->organizacion_social = $request->organizacion_social;
        $postulante->reside_municipio = $request->reside_municipio;
        $postulante->id_proyecto_pp = $proyecto_nuevo->id;
        $postulante->save();

        $proyecto = TblProyectosPP::find($proyecto_nuevo->id);
        return view('registro.resultado',compact('proyecto'));
       
        
        // return view('registro.formulario');
    }

    public function resultadoRegistro(Request $request){
       $proyecto = TblProyectosPP::find($request->id);
      
        return view('registro.resultado',compact('proyecto'));
    }

    public function imprimeRegistro(Request $request){
       $proyecto = TblProyectosPP::find($request->id);
       
        $pdf = PDF::loadView('registro.print_resultado',compact('proyecto'));
        return $pdf->stream('archivo-pdf.pdf');
    }

    public function store(RegistroFormRequest $request){

    }
}

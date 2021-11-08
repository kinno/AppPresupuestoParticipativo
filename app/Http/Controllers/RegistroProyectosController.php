<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroFormRequest;
use App\Http\Traits\CatalogosTrait;
use App\Models\TblPostulantes;
use App\Models\TblProyectosPP;
use Illuminate\Support\Facades\Storage;

class RegistroProyectosController extends Controller
{
    //

    use CatalogosTrait;

    public function index(){
        $municipios = $this->getMunicipios();
        $rubros = $this->getRubros();
        return view('registro.formulario',compact('municipios','rubros'));
    }

    public function send(RegistroFormRequest $request){
        // dd(json_encode($request->poblacion_beneficiada_esp));
        $imagen = $request->file('img_predio')->store('public/imagenes/predios');
        $url = Storage::url($imagen);

        $proyecto = new TblProyectosPP;
        $proyecto->nombre_proyecto = $request->nombre_proyecto;
        $proyecto->id_tipo_proyecto = $request->id_tipo_proyecto;
        $proyecto->impacto = $request->impacto;
        $proyecto->componentes = $request->componentes;
        $proyecto->latlng = $request->latlng;
        $proyecto->domicilio = $request->domicilio;
        $proyecto->img_predio = $url;
        $proyecto->costo = $request->costo;
        $proyecto->poblacion_beneficiada = $request->poblacion_beneficiada;
        $proyecto->poblacion_beneficiada_esp = json_encode($request->poblacion_beneficiada_esp);
        $proyecto->tiempo_ejecucion = $request->tiempo_ejecucion;
        $proyecto->vida_util = $request->vida_util;
        $proyecto->save();

        $postulante = new TblPostulantes;
        $postulante->nombre = $request->nombre;
        $postulante->edad = $request->edad;
        $postulante->sexo = $request->sexo;
        $postulante->curp = $request->curp;
        $postulante->telefono = $request->telefono;
        $postulante->correo = $request->correo;
        $postulante->domicilio = $request->domicilio_notificaciones;
        $postulante->id_municipio = $request->id_municipio;
        $postulante->integrante_pc = $request->integrante_pc;
        $postulante->organizacion_social = $request->organizacion_social;
        $postulante->reside_municipio = $request->reside_municipio;
        $postulante->id_proyecto_pp = $proyecto->id;
        $postulante->save();
        dd($proyecto->id);
       
        
        // return view('registro.formulario');
    }

    public function store(RegistroFormRequest $request){

    }
}

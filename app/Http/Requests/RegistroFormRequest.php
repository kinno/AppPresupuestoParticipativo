<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre" => "required|string",
            "edad" => "required|numeric",
            "curp" => "required|min:18|max:18",
            "correo" => "required|email:rfc",
            "telefono" => "required|numeric|min:10",
            "domicilio_notificaciones" => "required",
            "id_municipio" => "required",
            "nombre_proyecto" => "required|max:200",
            "id_tipo_proyecto" => "required",
            "impacto" => "required|max:500",
            "componentes" => "required|max:500",
            "domicilio" => "required",
            "latlng" => "required",
            "img_predio" => "required|image",
            "costo" => "required|numeric",
            "poblacion_beneficiada" => "required",
            "tiempo_ejecucion" => "required",
            "vida_util" => "required"
        ];
    }
}

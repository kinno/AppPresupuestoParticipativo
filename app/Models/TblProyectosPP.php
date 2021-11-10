<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblProyectosPP extends Model
{
    use HasFactory;
    protected $table = "tbl_proyectos_pp";

    public function postulante(){
       return $this->belongsTo('App\Models\TblPostulantes','id','id_proyecto_pp');
    }

    public function municipio(){
       return $this->hasOne('App\Models\CatMunicipio','id','id_municipio');
    }

    public function region(){
        return $this->hasOneThrough('App\Models\CatRegiones','App\Models\CatMunicipio','id_region','id_municipio','id','id');
    }
}

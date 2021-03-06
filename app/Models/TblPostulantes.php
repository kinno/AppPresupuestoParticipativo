<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblPostulantes extends Model
{
    use HasFactory;
    protected $table = "tbl_postulantes";
    
    public function proyectoPP(){
        return $this->hasOne('App\Models\TblProyectosPP','id','id_proyecto_pp');
    }
}

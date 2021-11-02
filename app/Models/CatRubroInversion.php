<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatRubroInversion extends Model
{
    use HasFactory;
    protected $table = "cat_rubro_inversion";

    public function proyectos(){
        return $this->hasMany('App\Models\CatTipoProyecto','id_rubro','id');
    }
}

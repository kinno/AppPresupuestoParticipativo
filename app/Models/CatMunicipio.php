<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CatMunicipio extends Model
{
    use HasFactory;

    protected $table = "cat_municipios";

    public function region(){
        return $this->belongsTo('App\Models\CatRegiones','id_region');
    }
}

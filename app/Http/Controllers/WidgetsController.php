<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class WidgetsController extends Controller
{
    //
    public function showAnalisis(Request $request){
        $datos = $request->analisisRegion;
        // error_log(print_r($datos));
        return view('widgets.analisisregional',compact('datos'))->render();
    }
}

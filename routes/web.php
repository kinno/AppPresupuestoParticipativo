<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\CatMunicipioController;
use App\Http\Controllers\RegistroProyectosController;
use App\Http\Controllers\WidgetsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/conoce_tu_municipio',CatMunicipioController::class,'index');
Route::get('/conoce', [CatMunicipioController::class,"index"])->name("municipio.index");
Route::get('/widgets/analisisregional', [WidgetsController::class, 'showAnalisis']);
//Rutas de registro de proyectos
Route::get('/registra_tu_proyecto', [RegistroProyectosController::class, 'index'])->name('registro.index');
Route::post('/registra_tu_proyecto/buscarCURP', [RegistroProyectosController::class, 'buscarCURP'])->name('registro.buscarCURP');
Route::post('/registra_tu_proyecto', [RegistroProyectosController::class, 'send'])->name('registro.send');
Route::get('/registra_tu_proyecto/resultado', [RegistroProyectosController::class, 'resultadoRegistro'])->name('registro.resultado');
Route::get('/registra_tu_proyecto/print', [RegistroProyectosController::class, 'imprimeRegistro'])->name('registro.print');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

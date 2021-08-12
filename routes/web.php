<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwapiController;
use App\Http\Controllers\NavesController;
use App\Http\Controllers\VehiculosController;

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

Route::get('/',[SwapiController::class, 'index'])->name('index');


////////////////////////////////////////////////
// ROUTES VEHICULOS
Route::get('/vehiculos/importar', [VehiculosController::class, 'importar'], function(){
  return redirect('/vehiculos/listar');
});

Route::get('/vehiculos/borrar', [VehiculosController::class, 'borrar'], function(){

});

Route::get('/vehiculos/listar', [VehiculosController::class, 'listar']);

///////////////////////////////////////////////
// ROUTES NAVES
Route::get('/naves/importar', [NavesController::class, 'importar'], function(){
  return redirect('/naves/listar');
});

Route::get('/naves/listar', [NavesController::class, 'listar']);

Route::get('/naves/borrar', [NavesController::class, 'borrar'], function(){

});

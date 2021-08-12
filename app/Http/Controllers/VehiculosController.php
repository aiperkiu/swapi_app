<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use App\Models\Naves;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


     public function importar()
     {

           $page = 1;
           $listado = array();

           do{

             $coleccion = Http::get("https://swapi.dev/api/vehicles/?page=$page")->json();

             foreach ($coleccion['results'] as $vehiculo) {

               unset($vehiculo['pilots'],$vehiculo['films']);
               DB::table('vehiculos')->insert($vehiculo);

             }

             $page++;

            } while($coleccion['next'] != null);


        return redirect('/vehiculos/listar');



     }


    public function listar()
    {
        return view('vehiculos')->with('vehiculos', DB::table('vehiculos')->get());
    }


    public function borrar()
    {
        DB::table('vehiculos')->truncate();

        return redirect()->action([SwapiController::class, 'index'])->with('status', 'VEHICULOS BORRADOS');


    }
}

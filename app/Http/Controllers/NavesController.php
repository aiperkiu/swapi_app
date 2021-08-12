<?php

namespace App\Http\Controllers;

use App\Models\Naves;
use App\Models\Vehiculos;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class NavesController extends Controller
{

    public function index()
    {
        //
    }


     public function importar()
     {

       $page = 1;
       $naves = array();

       do{

             $coleccion = Http::get("https://swapi.dev/api/starships/?page=$page");

             foreach ($coleccion['results'] as $naves) {

               unset($naves['pilots'],$naves['films'],$naves['created'],$naves['edited']);

               DB::table('naves')->insert($naves);
             }

             $page++;

        } while($coleccion['next'] != null);


        return redirect('/naves/listar');


     }

     public function listar()
     {
         return view('naves')->with('naves', DB::table('naves')->get());

     }


    public function borrar()
    {
        DB::table('naves')->truncate();

        return redirect()->action([SwapiController::class, 'index'])->with('status', 'NAVES BORRADAS');


    }
}

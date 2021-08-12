<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehiculos;
use App\Models\Naves;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class SwapiController extends Controller
{


    public function index()
    {

      $data = array('total_naves' => Http::get('https://swapi.dev/api/starships/')['count'],
                     'total_vehiculos' => Http::get('https://swapi.dev/api/vehicles/')['count'],
                     'cantidad_naves_death_stars' => Http::get('https://swapi.dev/api/starships/?search=Death%20Star')['count'],
                     'cantidad_vehiculos_death_stars' => Http::get('https://swapi.dev/api/vehicles/?search=Death%20Star')['count'],
                   );


      return view('api')->with('data', $data);

    }




}

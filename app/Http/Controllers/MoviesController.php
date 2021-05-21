<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;

class MoviesController extends Controller
{
    public function home(){

    $movies = Movies::all();
    // dd($movies);    

    return view('pages.home', compact('movies'));
    }

    // ------------------------------------
    // nella pagina di selezione vado a lavorare con l'id, passo quindi ID alla public function
    // lo porto poi in pagina con ::findOrFail($id)

    public function film($id){

   $movies = Movies::findOrFail($id);
    // dd($movies);

    return view('pages.film', compact('movies'));
    }
}

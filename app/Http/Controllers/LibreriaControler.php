<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writer;
use App\Article;

class LibreriaControler extends Controller
{
    function show($id){//Muestra articulos de un escritor
        echo Writer::find($id)->articles;
    }

    function showTags($id,$num_art){
        // $articulos = Writer::find($id)->articles;
        // dd($articulos[$num_art]->tags);
        echo Article::with('tags')->get();
    }
}

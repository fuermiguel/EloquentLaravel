<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writer;
use App\Article;

class LibreriaControler extends Controller
{
    function show($id){//Muestra articulos de un escritor
        dd(Writer::find($id)->articles);
    }

    function Tags(){
        
         dd(Article::with('tags')->get());

        echo Article::with('tags')->get();
    }
}

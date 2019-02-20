<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writer;

class LibreriaControler extends Controller
{
    function show($id){//Muestra articulos de un escritor
        echo Writer::find($id)->articles;
    }
}

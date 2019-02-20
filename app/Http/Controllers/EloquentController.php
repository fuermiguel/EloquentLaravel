<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\user;


class EloquentController extends Controller
{
    public function create($id){//Crea un perfil 

        $perfil = new Profile;
        $perfil->bio = 'Esta es la biografía de un usuario';
        $perfil->company = 'EscuelaIT';
        $perfil->technologies = 'PHP, Javascript, Apache, HTML';
        $user = User::find($id);

        //Aquí está la magia. Salvo el perfil como un campo del usuario.
        $user->profile()->save($perfil);
    }

    public function delete($id){//Borramos el perfil del usuario dado

        $usuario = User::find($id);
        $usuario->delete();
    }

    public function show($id){//Muestro el perfil del usuario dado
        $usuario = User::find($id);
        $perfil = $usuario->profile; 
        if($perfil) {
        echo 'tengo perfil ' . json_encode($perfil);
        } else {
        return 'no tiene profile';
        }
    }

    public function showUser($user_id){//Muestro un susario dado su perfil
        $perfil = Profile::find($user_id);
        $user = $perfil->user;
        echo 'Usuario del perfil dado ' . json_encode($user);
    }
}

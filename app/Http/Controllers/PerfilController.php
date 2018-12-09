<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PerfilController extends Controller
{
    public function meuPerfil(){
        $id_user = \Auth::user()->id;
        $user = User::find($id_user);

        if($user){
            return view('perfil.meuperfil');
        }else{
            abort(404);
        }

    }
}

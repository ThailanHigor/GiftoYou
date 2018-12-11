<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
class PerfilController extends Controller
{
    public function meuPerfil(){
        $id_user = \Auth::user()->id;
        $user = User::find($id_user);

        if($user){
            return view('perfil.meuperfil')->with(compact('user'));
        }else{
            abort(404);
        }

    }
    public function Perfil($id){
        $user = User::find($id);

        if($user){
            return view('perfil.perfil')->with(compact('user'));
        }else{
            abort(404);
        }

    }

    

    public function meusPosts(){
        $id_user = \Auth::user()->id;
        $posts = Posts::Where("User_id",$id_user)->get();
   
        return view('perfil.meusposts')->with(compact('posts'));
    }
}

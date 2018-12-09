<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostController extends Controller
{
    public function newPost(){

        return view("posts.newpost");
    }

    public function createPost(Request $request){

        $file = $request->file('foto');
        $legenda = $request->legenda;
        $id_user = \Auth::user()->id;
        if($request->hasFile('foto')){
            // Extensão do arquivo
            $ext= $file->getClientOriginalExtension();
            $imageName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/images/fotos'), $imageName);


            $model = new Posts();     
            $model->Legenda  = $legenda;
            $model->User_id = $id_user;
            $model->Foto  = $imageName;
            $model->Latitude = 10000;
            $model->Longitude = 1000;
            $model->Excluido = false;
            $model->Liberado = true;
            $model->save();
        }

        return redirect('/feed');
    }
}

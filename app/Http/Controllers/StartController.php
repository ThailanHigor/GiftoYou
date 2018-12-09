<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lojas;
use App\Categorias;
use App\UsersCategorias;
use App\LojasCategorias;
use App\UsersLojas;
use App\User;


class StartController extends Controller
{
    public function start()
    {
      return view('start.start');
    }

    public function categorias(){
      $categorias = Categorias::all();
      return view('start.startcategorias')->with('categorias',$categorias);
    }

    public function storeCategorias(Request $request)
    {
      $id_user  = \Auth::user()->id;
      $input = $request->all();
      if(isset($input['categorias'])){
        foreach($input['categorias'] as $categoria_id){
          $model = new UsersCategorias();     
          $model->User_id = $id_user;
          $model->Categorias_id= $categoria_id;
          $model->save();
        }
      }

      return redirect('/startlojas');
    }

    public function lojas(){
      $id_user  = \Auth::user()->id;
      $categoria_random = UsersCategorias::where('User_id',"=",$id_user)->take(1)->first();
      $categoria = null;

      if($categoria_random != null){
        $categoria_id = $categoria_random['Categorias_id'];
        $categoria = Categorias::where('id',$categoria_id)->first();
      }

      $lojas_id =[];
      $userCat = UsersCategorias::where("User_id","=",$id_user)->get();
   

      foreach($userCat as $categoria_id){
          $lojas_id[] = $categoria_id["Categorias_id"];
      }

      $lojascat= LojasCategorias::all();
      $lojas = [];
      foreach($lojascat as $loja){
        foreach ($lojas_id as $id) {
          if($loja['Categoria_id'] == $id){
            $lojas[] = $loja;
          }
        }
      }


      $lojasFinal = [];
      $arraylojas=[];
      foreach ($lojas as $loja) {
        if(!in_array($loja["Loja_id"], $arraylojas)){
          $lojasFinal[] = Lojas::where("id","=",$loja["Loja_id"])->first();
          $arraylojas[] = $loja["Loja_id"];
        }

      };
    
      return view('start.startLojas')->with(compact('categoria', 'lojasFinal'));
    }

    public function storeLojas(Request $request){

      $id_user  = \Auth::user()->id;
      $input = $request->all();

      if(isset($input['lojas'])){
        foreach($input['lojas'] as $lojas_id){
          $model = new UsersLojas();     
          $model->User_id = $id_user;
          $model->Lojas_id= $lojas_id;
          $model->save();

          $usuario = User::find($id_user);
          $usuario->ativo = true;
          $usuario->save();
        }
      }

      return redirect('/finish');
    }

    public function finish(){
      return view('start.finish');
    }

    public function addFoto(){
      return view('start.perfilfoto');
    }

    public function saveAvatar(Request $request){

      $avatar = $request->avatar;
      $data = $request->data;

      if($avatar != null && $data != null){
        $id_user  = \Auth::user()->id;
        $model = User::find($id_user);
        $model->FotoPerfil = $avatar;
        $model->DataAniversario = $data;
        $model->save();
        return redirect('/start');
      }
      return redirect('/foto-perfil');
    
    }
}

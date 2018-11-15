<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lojas;
use App\Categorias;
use App\UsersCategorias;
use App\UsersLojas;

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
 
      $lojas = Lojas::all();
      return view('start.startLojas')->with(compact('categoria', 'lojas'));
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
        }
      }

      return redirect('/finish');
    }

    public function finish(){
      return view('start.finish');
    }

}

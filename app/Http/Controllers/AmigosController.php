<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserFriends;
use App\User;
class AmigosController extends Controller
{
    public function index(){
        return view("amigos.index");
    }

    public function meusAmigos(Request $request){

        $id_user  = $request->id_user;
        $users = UserFriends::Where("User_id","=",$id_user)->get();

        $amigos =[];
        foreach ($users as $user) {
            $amigos[] =  User::Where("id","=",$user['UserFriend_Id'])->first();
        }
        $view = view('amigos.fields', compact('amigos'))->render();
        
        return $view; 
    }

    public function novoAmigo(Request $request){

        $id_user  = $request->id_user;
        $users = User::Where("id","!=",$id_user)->get();
        

        $amigos =[];
        foreach ($users as $user) {
            $friends = UserFriends::Where("User_id","=",$id_user)->Where("UserFriend_id","=",$user['id'])->get();

            if($friends == null || $friends->isEmpty()){
                $amigos[] = $user;
            }
        }

        $view = view('amigos.amigosAdd', compact('amigos'))->render();
        return $view; 
    }


    public function addAmigo(Request $request){
        $id_friend = $request->id_friend;
        $id_user = $request->id_user;
        
        $like = UserFriends::Where("User_id","=",$id_user)->Where("UserFriend_id","=",$id_friend)->get();
        if(!$like->isEmpty()){
            return response()->json(false); 
        }else{
            $model = new UserFriends();     
            $model->UserFriend_id  = $id_friend;
            $model->User_id = $id_user;
            $model->Excluido = false;
            $model->Liberado = true;
            $model->save();
            
            return response()->json(true); 
        }
    }
}

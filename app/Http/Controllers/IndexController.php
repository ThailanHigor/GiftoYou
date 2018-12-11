<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\TagsPosts;
use App\Likes;
use App\UserFriends;
use App\User;
use App\Comentarios;
App\Http\Middleware\VerifyCsrfToken::class;

class IndexController extends Controller
{
    public function index(){
        return view("index.index");
    }

    public function feed(){
        $id_user  = \Auth::user()->id;
        $users = UserFriends::Where("User_id","=",$id_user)->get();

        $amigos =[];
        foreach ($users as $user) {
            $amigos[] =  User::Where("id","=",$user['UserFriend_Id'])->first();
        }

        $posts =[];
        $postall = Posts::all();
        $idrepetidos = [];
        foreach ($amigos as $amigo) {
            foreach ($postall as  $post) {
             
                if($post['User_id'] == $amigo["id"]){
                    $posts[] = $post;
                    $idrepetidos = $post['id'];
                }
            
            }
            
        } 

      
        return view('index.feed')->with(compact('posts'));
    }

    public function Comentar(Request $request){
        $id_post = $request->id_post;
        $id_user = $request->id_user;
        $comentario = $request->comment;

        $model = new Comentarios();     
        $model->PostId  = $id_post;
        $model->User_id = $id_user;
        $model->Comentario = $comentario;
        $model->Excluido = false;
        $model->Liberado = true;

        $model->save();
        
        return redirect()->route('feed');
    }

    public function likePost(Request $request){
        $id_post = $request->id_post;
        $id_user = $request->id_user;
        
        $like = Likes::Where("Postid","=",$id_post)->Where("User_id","=",$id_user)->get();
        if(!$like->isEmpty()){
            return response()->json(false); 
        }else{
            $model = new Likes();     
            $model->PostId  = $id_post;
            $model->User_id = $id_user;
            $model->Excluido = false;
            $model->Liberado = true;
            $model->save();
            
            return response()->json(true); 
        }

     
    }

    public function getPostsById(Request $request){
        $id_post = $request->id_post;
        $posts = Posts::Where("id","=",$id_post)->first();
        if($posts == null){
            return response()->json(false); 
        }else{           
            $view = view('index.comentarios', compact('posts'))->render();
            return $view;
        }
    }
}

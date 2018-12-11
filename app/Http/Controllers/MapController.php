<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lojas;
use App\UsersLojas;

class MapController extends Controller
{
    public function index(){
        $id_user = \Auth::user()->id;
        
        $lojastemp = UsersLojas::where("User_id",$id_user)->get();

        $id_lojas=[];
        foreach ($lojastemp as $loja) {
            $id_lojas[] = $loja['Lojas_id'];
        };

        $lojas=[];
        
        foreach ($id_lojas as $id) {
            $lojas[] = Lojas::where("Id",$id)->first();
        }


        return view("map.index")->with(compact("lojas"));
    }
}

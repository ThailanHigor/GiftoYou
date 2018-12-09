<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = \Auth::user()->id;
        $user = User::find($id_user);
        if($user->ativo == 1){
            return redirect()->route('feed');
        }else{
            return view('start.start');
        }
    
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lojas;

class StartController extends Controller
{
    
    public function start()
    {
      return view('start.start');
    }

    public function show()
    {
       $lojas = Lojas::all();
       return view('start.startLojas')->with('lojas',$lojas);
    }

    public function finish(Request $request)
    {
      $input = $request->all();
      dd($input);
    }
}

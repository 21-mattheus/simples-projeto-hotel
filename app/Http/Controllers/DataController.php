<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //

    public function data(){

     //   $request->validate([
         //   'chegada' => 'required',
         //   'saida' => 'required',
         //   'quantidadeHospede' => 'required'
     //   ]);

        return view('data');
    }
}

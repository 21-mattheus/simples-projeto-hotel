<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    //

    public function cadastrar(){
        return view('data');
    }

    public function cadastrado(){

        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'senha' => 'required'
        ]);

        return redirect()->route('data.index');
    }
}

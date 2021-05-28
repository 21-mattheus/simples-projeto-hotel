<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    //

    public function cadastrar(){
        return view('data');
    }

    public function cadastrado(Request $request){

        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'senha' => 'required'
        ]);

        $cadastro = new Cadastro();
        $cadastro->nome = $request->nome;
        $cadastro->email = $request->email;
        $cadastro->cpf = $request->cpf;
        $cadastro->senha = $request->senha;
        $cadastro->save();

        return redirect()->route('data.index');

//       print_r($request->all());die;
//       Cadastro::create($request->all());

    }
}

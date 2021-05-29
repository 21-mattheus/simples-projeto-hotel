<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    //

    public function login(){
        return view('login');
    }

    public function logar(Request $request){

        $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);

        if($request->email == 'matheus@matheus.com' && $request->senha == '2121')

            session(['seuNome' => $request->email]);

            $login = new Login();
            $login->email = $request->email;
            $login->senha = $request->senha;
            $login->save();

            return redirect()->route('data.index');


            // }return redirect()->back()->with('erro', 'Login ou senha inválidos.');
    }

    public function logout(Request $request){
        session()->flush();
        return redirect()->route('inicio.index');


        //return view('login');
    }


//    public function cadastrar(Request $request){
//
//        $request->validate([
//            'nome' => 'required',
//            'email' => 'required',
//            'cpf' => 'required',
//            'senha' => 'required'
//        ]);

//        return redirect()->route('data.index');
//    }
}




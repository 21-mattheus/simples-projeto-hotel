<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    //

    public function login(){
        return view('login');
    }

    public function logar(Request $r){

        $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);

        if($r->email == 'matheus@matheus.com' && $r->senha == '2121')
            return redirect()->route('data.index');
        else
            return redirect()->back()->with('erro', 'Login ou senha inválidos.');
    }

    public function logout(){
        return view('login');
    }

}


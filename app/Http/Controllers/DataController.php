<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //

    public function data(){

        return view('data');
    }

    public function escolhaData(Request $request){

        $request->validate([
            'chegada' => 'required',
            'saida' => 'required',
            'quantidadeHospedes' => 'required'
        ]);

        $datas = new Data();
        $datas->chegada = $request->chegada;
        $datas->saida = $request->saida;
        $datas->quantidadeHospedes = $request->quantidadeHospedes;
        $datas->save();

        return redirect()->route('quartos.index');
    }
}

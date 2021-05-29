<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    //

    public function pagamento(){
        return view('pagamento');
    }

    public function realizarPagamento(Request $request){

        $request->validate([
            'nome'=>'required',
            'nome_do_cartao'=>'required',
            'numero_do_cartao'=>'required',
            'validade_do_cartao'=>'required'
        ]);


        $pagamentos = new Pagamento();
        $pagamentos->nome = $request->nome;
        $pagamentos->nome_do_cartao = $request->nome_do_cartao;
        $pagamentos->numero_do_cartao = $request->numero_do_cartao;
        $pagamentos->validade_do_cartao = $request->validade_do_cartao;
        $pagamentos->save();

        return redirect()->route('inicio.index');

        //echo 'Reserva realizada com sucesso!';
    }
}

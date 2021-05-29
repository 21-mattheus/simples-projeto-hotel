<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\QuartosController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\AtividadesController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\CadastrarController;
use App\Models\Cadastro;
use App\Models\Data;
use App\Models\Pagamento;

use function GuzzleHttp\Promise\each;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//busca todos os cadastros

Route::get('/busca', function (){
    $cadastro = Cadastro::all();

    foreach ($cadastro as $cad){
     echo $cad-> id . ' - ' . $cad-> nome . ' - ' . $cad->cpf . '<br/';
    }
});

//retornar um unico elemento

Route::get('/unico', function (){
//  $cadastro = Cadastro::where('nome', 'Matheus')->first(); //first um resultado / get uma lista de resultados
    $cadastro = Cadastro::find(2);  //busca baseado em id
    print_r($cadastro->nome);
});

Route::get('/teste', function(){

//   Cadastro::create(['nome' => 'Matheus']);
//   Cadastro::create(['email' => '@matheus.com']);
//   Cadastro::create(['cpf' => '111.111.111-11']);
//   Cadastro::create(['senha' => 'matheus']);

//    $pagamentos = new Pagamento();
//
//    $pagamentos->nome = 'Henrique';
//    $pagamentos->nome_do_cartao = 'HenriqueCenter';
//    $pagamentos->numero_do_cartao = '212121';
//    $pagamentos->validade_do_cartao = '21-21-2121';
//
//    $pagamentos->save();

//    $datas = new Data();
//
//    $datas->chegada = '21-21-2121';
//    $datas->saida = '21-21-2121';
//    $datas->quantidadeHospedes = '21';
//
//    $datas->save();

//    $cadastro = new Cadastro();
//
//    $cadastro->nome = 'Matheus';
//    $cadastro->email = 'matheus@matheus.com';
//    $cadastro->cpf = '111.111.111-11';
//    $cadastro->senha = 'matheus';
//
//    $cadastro->save();

//    echo 'ok';

});

Route::get('inicio', [InicioController::class, 'inicio'])
->name('inicio.index');

Route::get('/login', [LoginController::class, 'login'])
->name('login.index');

Route::post('/logar', [LoginController::class, 'logar'])
->name('logar');

Route::get('/logout', [LoginController::class, 'logout'])
->name('logout');

Route::get('/cadastrar', [CadastrarController::class, 'cadastrar'])
->name('cadastrar');

Route::post('/cadastrado', [CadastrarController::class, 'cadastrado'])
->name('cadastrado');

Route::get('/data', [DataController::class, 'data'])->middleware('login')
->name('data.index');

Route::post('/escolhaData', [DataController::class, 'escolhaData'])->middleware('login')
->name('escolhaData');

Route::get('/quartos', [QuartosController::class, 'quartos'])->middleware('login')
->name('quartos.index');

Route::get('/pagamento', [PagamentoController::class, 'pagamento'])->middleware('login')
->name('pagamento.index');

Route::post('/realizarPagamento', [PagamentoController::class, 'realizarPagamento'])->middleware('login')
->name('realizarPagamento');

Route::get('/atividades', [AtividadesController::class, 'atividades'])
->name('atividades.index');

Route::get('/sobre', [SobreController::class, 'sobre'])
->name('sobre.index');

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


Route::get('teste', function(){

//   Cadastro::create(['nome' => 'Matheus']);
//   Cadastro::create(['email' => '@matheus.com']);
//   Cadastro::create(['cpf' => '111.111.111-11']);
//   Cadastro::create(['senha' => 'matheus']);


    $cadastro = new Cadastro();

    $cadastro->nome = 'Matheus';
    $cadastro->email = 'matheus@matheus.com';
    $cadastro->cpf = '111.111.111-11';
    $cadastro->senha = 'matheus';

    $cadastro->save();

    echo 'ok';

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


Route::get('/quartos', [QuartosController::class, 'quartos'])->middleware('login')
->name('quartos.index');


Route::get('/pagamento', [PagamentoController::class, 'pagamento'])->middleware('login')
->name('pagamento.index');


Route::get('/atividades', [AtividadesController::class, 'atividades'])
->name('atividades.index');


Route::get('/sobre', [SobreController::class, 'sobre'])
->name('sobre.index');

<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;
//Rota para listar todos os usuarios
Route::get('/usuarios', [UsuarioController::class,'index'])->name('usuarios.index');

//rota que direciona para a página que tem o formulario de cadastro
Route::get('/usuarios/cadastro', [UsuarioController::class,'cadastro'])->name('usuarios.cadastro');

//Rota que direciona para o processamento do formulário
Route::post('/usuarios/novo', [UsuarioController::class,'novo'])->name('usuarios.novo');


//Rota para chamar tela de login
Route::get('/telalogin', [AppController::class, 
'telaLogin'])->name('tela.login'); 

//Rota para chamar a função de fazer login
Route::post('/login', [AppController::class, 'login'])->name('login');

Route::get('/usuarios/alterar/{id}', [UsuarioController::class, 
'telaAlteracao'])->name('usuario.atualiza');

Route::post('/usuarios/alterar/{id}', [UsuarioController::class, 
'alterar'])->name('usuario.alterar');

Route::get('/usuarios/excluir/{id}', [UsuarioController::class, 
'excluir'])->name('usuario.excluir');

//rota que redireciona para tela de produtos
Route::get('/produtos', [ProdutoController::class, 'indexProduto'])->name('produtos.index');
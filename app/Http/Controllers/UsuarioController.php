<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuarioController extends Controller
{
    //Listar usuarios
    public function index(){
        $usuarios = Usuario::all(); //buscar todos os registro no banco
        return view("usuarios.index",compact("usuarios"));
    }

    public function cadastro(){
        return view("usuarios.cadastro");
    }

    public function novo(Request $req){
        $nome = $req->nome;
        $login = $req->login;
        $senha = $req->senha;
        $usuario = new Usuario();
        $usuario->nome = $nome;
        $usuario->login = $login;
        $usuario->senha = $senha;  
        
        if($usuario->save()){
            $mensagem = "Usuario $nome inserido com sucesso";
        }else{
            $mensagem = "Não foi possível inserir";
        }
        return view("usuarios.resultado",compact("mensagem")); 
    }

    public function telaAlteracao($id){
        $usuario = Usuario::find($id);
        return view("usuarios.alteracao", ["u" => $usuario]);
    }

    public function alterar(Request $req, $id){
        $nome = $req->input("nome");
        $login = $req->input("login");
        $senha = $req->input("senha");

        $usuario = Usuario::find($id);

        $usuario->nome=$nome;
        $usuario->login=$login;
        $usuario->senha=$senha;

        if($usuario->save()){
            $mensagem = "Usuario $nome atualizado com sucesso";
        }else{
            $mensagem = "Não foi possível atualizar";
        }
        return view("usuarios.resultado", compact("mensagem"));
    }

    public function excluir($id){
        
        $usuario = Usuario::find($id);
        
        $nome = $usuario->nome;

        if($usuario->delete()){
            $mensagem = "Usuario $nome excluído com sucesso";
        }else{
            $mensagem = "Não foi possível excluir";
        }
        return view("usuarios.resultado", compact("mensagem"));
    }
}

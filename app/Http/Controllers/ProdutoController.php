<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    public function indexProduto(){
        $produto = Produtos::all();
        return view("produtos.index",compact("produto"));
    }

    public function cadastroProduto(){
        return view("produtos.cadastro");
    }

    public function novoProduto(Request $req){
        $nome = $req->nome;
        $descricao = $req->descricao;
        $quantidade = $req->quantidade;
        $valor = $req->valor;
        $categoria = $req->categoria;
        $estado = $req->estado;
        $produtos = new Produtos();
        $produtos->nome = $nome;
        $produtos->descricao = $descricao;
        $produtos->quantidade = $quantidade;
        $produtos->valor = $valor;
        $produtos->categoria = $categoria;
        $produtos->estado = $estado;
        
        if($produtos->save()){
            $mensagemP = "Produto $nome inserido com sucesso";
        }else{
            $mensagemP = "Não foi possível inserir";
        }
        return view("produtos.resultado",compact("mensagemP")); 
    }

    public function telaAlteracaoProduto($id){
        $produto = Produtos::find($id);
        return view("produtos.alteracao", ["u" => $produto]);
    }

    public function alterarProduto(Request $req, $id){
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $quantidade = $req->input('quantidade');
        $valor = $req->input('valor');
        $categoria = $req->input('categoria');
        $estado = $req->input('estado');

        $produto = Produtos::find($id);

        $produto->nome= $nome;
        $produto->descricao = $descricao;
        $produto->quantidade = $quantidade;
        $produto->valor = $valor;
        $produto->categoria = $categoria;
        $produto->estado = $estado;

        if($produto->save()){
            $mensagemP = "Produto $nome atualizado com sucesso";
        }else{
            $mensagemP = "Não foi possível atualizar";
        }
        return view("produtos.resultado", compact("mensagemP"));
    }

    public function excluirProduto($id){
        
        $produto = Produtos::find($id);
        
        $nome = $produto->nome;

        if($produto->delete()){
            $mensagemP = "Produto $nome excluído com sucesso";
        }else{
            $mensagemP = "Não foi possível excluir";
        }
        return view("produtos.resultado", compact("mensagemP"));
    }
}


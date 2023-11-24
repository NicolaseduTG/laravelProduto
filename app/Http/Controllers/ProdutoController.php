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


}

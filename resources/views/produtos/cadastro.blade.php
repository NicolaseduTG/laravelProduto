@extends('layouts.app')
@section('cadastroProduto')
<h1>Cadastro de Produtos</h1>
<div class="container">
<form class="row g-3" action="{{ route('produtos.novo')}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="col-md-10">
    <label class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control">
</div>
<div class="col-md-10">
    <label class="form-label">Descricao</label>
    <input type="text" name="descricao" class="form-control">
</div>
<div class="col-md-4">
    <label class="form-label">Quantidade</label>
    <input type="text" name="quantidade" class="form-control">
</div>
<div class="input-group md-8">
    <span class="input-group-text">R$</span>
    <input type="text" name="valor" class="form-control">
</div>
<div class="col-md-6">
    <label class="form-label">Categoria</label>
    <input type="text" name="categoria" class="form-control">
</div>
<select class="form-select" name="estado" aria-label="Default select example">
  <option selected value="Novo">Novo</option>
  <option value="Usado">Usado</option>
</select>
<div class="col-12">
    <button class="btn btn-primary" type="submit" value="Enviar">Confirmar</button>
</div>
</div>
@endsection
@extends('layouts.app')
@section('alteracaoProduto')

<h1>Editar um Produto</h1>
<div class="container">
<form class="row g-3" action="{{ route('produto.alterar', ['id' => $u -> id])}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="col-md-10">
    <label class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ $u -> nome }}">
</div>
<div class="col-md-10">
    <label class="form-label">Descricao</label>
    <input type="text" name="descricao" class="form-control" value="{{ $u -> descricao }}">
</div>
<div class="col-md-4">
    <label class="form-label">Quantidade</label>
    <input type="text" name="quantidade" class="form-control" value="{{ $u -> quantidade }}">
</div>
<div class="input-group md-8">
    <span class="input-group-text">R$</span>
    <input type="text" name="valor" class="form-control" value="{{ $u -> valor }}">
</div>
<div class="col-md-6">
    <label class="form-label">Categoria</label>
    <input type="text" name="categoria" class="form-control" value="{{ $u -> categoria }}">
</div>
<select class="form-select" name="estado" aria-label="Default select example">
  <option selected value="{{ $u -> estado }}">Novo</option>
  <option value="{{ $u -> estado }}">Usado</option>
</select>
<div class="col-12">
    <button class="btn btn-primary" type="submit" value="Enviar">Confirmar</button>
</div>
</div>
@endsection
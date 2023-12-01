@extends('layouts.app')
@section('produtos')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Loja X</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('usuarios.index')}}">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('produtos.index')}}">Produtos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Produtos</h1>
    <div class="table-responsive">
        <a class="btn btn-success" href="{{route('produtos.cadastro')}}">Adicionar</a>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Categoria</th>
                    <th>Estado</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produto as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->valor }}</td>
                    <td>{{ $produto->categoria }}</td>
                    <td>{{ $produto->estado }}</td>
                    <td>
                      <a class="btn btn-warning" href="{{route('produto.atualiza', ['id' => $produto->id])}}">Alterar</a>
                      <a class="btn btn-danger" href="#" onclick="excluir({{ $produto->id }})">Excluir</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<script>
    function excluir(id){ 
        if (confirm(`Deseja excluir o produto de id '${id}'?`)) {
            location.href = '/produtos/excluir/' + id;
        }
    }
</script>

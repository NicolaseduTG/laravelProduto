@extends('layouts.app')
@section('conteudo')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('usuarios.index')}}">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Lista de Usuarios</h1>
    <div class="table-responsive">
        <a class="btn btn-success" href="{{route('usuarios.cadastro')}}">Adicionar</a>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td> {{ $usuario->id }} </td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->login }}</td>
                    <td>{{ $usuario->senha }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('usuario.atualiza', ['id' => $usuario->id])}}" >Alterar</a>
                        <button class="btn btn-danger" onclick="excluir({{$usuario->id}})" >Excluir</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<script>
    function excluir(id){ 
        if (confirm(`Deseja excluir o usuário de id '${id}'?`)) {
            location.href = '/usuarios/excluir/' + id;
        }
    }
</script>
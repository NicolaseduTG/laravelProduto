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
</div>

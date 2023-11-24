@extends('layouts.app')
@section('alteracao')
<h1>Edição de Usuário</h1>
<form action="{{ route('usuario.alterar', ['id' => $u -> id])}}" method="post"> 
    @csrf 
    <input type="text" name="nome" placeholder="Nome" value="{{ $u -> nome }}">
    <input type="text" name="login" placeholder="Login" value="{{ $u -> login }}">
    <input type="text" name="senha" placeholder="Senha" value="{{ $u -> senha }}">
    <input type="submit" value="Enviar">
</form>
@endsection
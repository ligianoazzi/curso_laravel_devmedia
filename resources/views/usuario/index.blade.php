@extends('layout.principal')
@section('titulo','Usuario')

@section('conteudo')	

estou no arquivo index.blade.php

<br>
<br>
<hr>
Texto vindo direto da model - método public "getUsuario"
<b> {{ $user }} </b>

<br>
<br>
<hr>
Texto vindo direto da model - método static "listaUsuarios"
<b> {{ $user }} </b>
@endsection
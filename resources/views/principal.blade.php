{{-- Feita só pra facilitar o acesso da index (não precisar ficar escrevendo a URL o tempo todo) --}}

@extends('layouts.app')

@section('title', 'Página Principal')
@section('content')
    <h1 class="container d-flex justify-content-center mt-2">Bem-Vindo</h1>
    <hr>
    <h3 class="container d-flex justify-content-center mt-2">Acesse a lista de jogos!</h3>

    <div class="container d-flex justify-content-center mt-2">
        <a href="{{ route('jogos.index') }}"><input type="button" value="Jogos" class="btn btn-primary me-2 mt-2"></a>

        <a href="{{ route('categorias.index') }}"><input type="button" value="Categorias" class="btn btn-primary mt-2"></a>
    </div>
@endsection

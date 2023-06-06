{{-- Feita só pra facilitar o acesso da index (não precisar ficar escrevendo a URL o tempo todo) --}}

@extends('layouts.app')

@section('title', 'ERRO!')
@section('content')
    <div class="container m-2">
        <h1>ERRO NA ROTA</h1>
        <hr>
        <h3>Acesse a lista de jogos!</h3>
        <a href="{{ route('jogos.index') }}"><input type="button" value="Lista"></a>
    </div>
@endsection

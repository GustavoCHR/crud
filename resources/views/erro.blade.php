@extends('layouts.app')

@section('title', 'ERRO!')
@section('content')
    <div class="container m-2">
        <h1>ERRO!</h1>
        <hr>
        <h3>Volte para a lista de jogos!</h3>
        <a href="{{ route('jogos.index') }}"><input type="button" value="Principal" class="btn btn-primary mb-2"></a>
    </div>
@endsection

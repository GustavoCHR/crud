@extends('layouts.app')


@section('title', 'Criação')
@section('content')
    <div class="container mt-2">
        <h1>Adicione uma nova categoria</h1>
        <hr>
        <form action="{{ route('categorias.store') }}" method='POST'>
            <div class="form-group">
                @csrf
                <div class="form_group"><label for="nome">Nome:</label>
                    <input type="text" class='form-control' value="{{old('nome')}}" name='nome' placeholder="Digite um nome" required>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group">
                            <input type="submit" name='submit' class='btn btn-success' value="Enviar">
                        </div>
                    </div>
                    <div class="col-sm-12 mt-2">
                        <a href="{{ route('categorias.index') }}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')


@section('title', 'Edição')
@section('content')

    <div class="container mt-2">
        <h1>Editar Categoria</h1>
        <hr>
        <form action="{{ route('categorias.update', ['categoria' => $categorias->id]) }}" method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form_group">
                    <label for="nome" class="nome">Nome:</label>
                    <input type="text" class='form-control' name='nome' value="{{ $categorias->nome }}" placeholder="Digite um nome" required>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="" value="Editar">
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

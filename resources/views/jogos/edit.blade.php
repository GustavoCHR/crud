@extends('layouts.app')


@section('title', 'Edição')
@section('content')

    <div class="container mt-2">
        <h1>Editar Jogo</h1>
        <hr>
        <form action="{{ route('jogos.update', ['jogo' => $jogos->id]) }}" method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form_group"><label for="nome">Nome:</label>
                    <input type="text" class='form-control' name='nome' value="{{$jogos->nome}}" placeholder="Digite um nome" required>
                </div>
                <br>

                <label for="categoria">Categoria:</label>
                <select name="categoria" class='form-select mb-3' required>
                    <option selected>{{$jogos->categoria->nome}}</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>

                <div class="form-group"><label for="ano_criacao">Ano de Criação:</label>
                    <input type="text" class='form-control' name='ano_criacao'value="{{ $jogos->ano_criacao }}" placeholder="Digite o ano de criação" required>
                </div>
                <br>

                <div class="form-group"><label for="valor">Valor:</label>
                    <input type="text" class='form-control' name='valor' value="{{$jogos->valor}}" laceholder="Digite um valor" required>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="" value="Editar">
                        </div>
                    </div>
                    <div class="col-sm-12 mt-2">
                        <a href="{{ route('jogos.index') }}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

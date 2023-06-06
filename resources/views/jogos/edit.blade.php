@extends('layouts.app')


@section('title', 'Edição')
@section('content')

    <div class="container mt-2">
        <h1>Editar Jogo</h1>
        <hr>
        <form action="{{ route('jogos.update', ['id' => $jogos->id]) }}" method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form_group"><label for="nome">Nome:</label>
                    <input type="text" class='form-control' name='nome' value="{{ $jogos->nome }}"
                        placeholder="Digite um nome">
                </div>
                <br>

                <div class="form-group"><label for="categoria">Categoria:</label>
                    <input type="text" class='form-control' name='categoria' value="{{ $jogos->categoria }}"
                        placeholder="Digite uma categoria">
                </div>
                <br>

                <div class="form-group"><label for="ano_criacao">Ano de Criação:</label>
                    <input type="text" class='form-control' name='ano_criacao'value="{{ $jogos->ano_criacao }}"
                        placeholder="Digite o ano de criação">
                </div>
                <br>

                <div class="form-group"><label for="valor">Valor:</label>
                    <input type="text" class='form-control' name='valor' value="{{ $jogos->valor }}"
                        placeholder="Digite um valor">
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

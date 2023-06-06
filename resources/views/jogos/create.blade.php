@extends('layouts.app')


@section('title', 'Criação')
@section('content')

    <div class="container mt-2">
        <h1>Adicione um novo jogo</h1>
        <hr>
        <form action="{{ route('jogos.store') }}" method='POST'>
            <div class="form-group">
                @csrf
                <div class="form_group"><label for="nome">Nome:</label>
                    <input type="text" class='form-control' name='nome' placeholder="Digite um nome">
                </div>
                <br>

                <div class="form-group"><label for="categoria">Categoria:</label>
                    <input type="text" class='form-control' name='categoria' placeholder="Digite uma categoria">
                </div>
                <br>

                <div class="form-group"><label for="ano_criacao">Ano de Criação:</label>
                    <input type="text" class='form-control' name='ano_criacao' placeholder="Digite o ano de criação">
                </div>
                <br>

                <div class="form-group"><label for="valor">Valor:</label>
                    <input type="text" class='form-control' name='valor' placeholder="Digite um valor">
                </div>
                <br>


                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group">
                            <input type="submit" name='submit' class='btn btn-success' value="Enviar">
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

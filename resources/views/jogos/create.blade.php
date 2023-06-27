@extends('layouts.app')


@section('title', 'Criação')
@section('content')

    <div class="container mt-2">
        <h1>Adicione um novo jogo</h1>
        <hr>
        <form action="{{ route('jogos.store') }}" method='POST'>
            <div class="form-group">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class='form-control' id='formInputGroup' name='nome' placeholder="Digite um nome" value="{{old('nome')}}" required>
                </div>
                <br>

                <label for="categoria">Categoria:</label>
                <select name="categoria" class='form-select mb-3'>
                    <option selected disabled>Selecione uma categoria</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>

                {{-- <div class="form-group">
                    <label for="nome">Categoria:</label>
                    <input type="text" class='form-control' id='formInputGroup' name='categoria' placeholder="Digite uma categoria" value="{{old('categoria')}}" required>
                </div>
                <br> --}}

                <div class="form-group"><label for="ano_criacao">Ano de Criação:</label>
                    <input type="text" class='form-control' name='ano_criacao' placeholder="Digite o ano de criação" value="{{old('ano_criacao')}}" required>
                </div>
                <br>

                <div class="form-group"><label for="valor">Valor:</label>
                    <input type="text" class='form-control' name='valor' placeholder="Digite um valor" value="{{old('valor')}}" required>
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

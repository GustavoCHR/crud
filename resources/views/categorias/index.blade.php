@extends('layouts.app')


@section('title', 'Lista')
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-10">
                <h1>Lista de Categorias</h1>
            </div>

            <div class="col-sm-2 mt-3 mb-1 d-flex">
                <a href="{{ route('categorias.create') }}"><input type="button" name='novo' class='btn btn-primary me-2' value="Novo"></a>

                <a href="{{ route('jogos.index') }}" class="btn btn-warning">Jogos</a> {{--#PRECISA RESOLVER ERRO NA ROTA--}}
            </div>
        </div>
        <hr>
        <table class="table table-borderless table-hover align-middle">
            <thead>
                {{-- <div>
                    <form  action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="#" class="btn btn-danger" id="deleteAllSelected">Delete All</a>
                    </form>
                </div> --}}

                <tr class="align-middle">
                    {{-- <th scope="col" >
                        <input type="checkbox" class="checkbox me-2" id="select_all_ids">
                        # ID
                    </th> --}}
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">...</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        {{-- <td class='checkbox'>
                            <input class='checkbox' type="checkbox" name="ids" class='checkbox_ids' value="{{ $categoria->id }}">
                        </td> --}}
                        <td class="p-2 flex-fill">{{ $categoria->id }}</td>
                        <td class="p-2 flex-fill">{{ $categoria->nome }}</td>
                        <td class="d-flex">
                            <a href="{{ route('categorias.edit', ['categoria' => $categoria->id]) }}" class='btn btn-info me-2'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                    class="bi bi-pencil mb-1" title = "Editar"viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                            </a>

                            <form action="{{ route('categorias.destroy', ['categoria' => $categoria->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-danger'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                        class="bi bi-trash3 mb-1" title="Deletar" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <div class="page-bar"></div>
        </table>
    </div>

    {{-- <script>
        $(function(e) {
            $('#select_all_ids').click(function(){
                $('.checkbox_ids').prop('checked', $(this).prop('checked'));
            });

            $("#deleteAllSelected").click(function(e){
                e.preventDefault();
                var all_ids = [];
                $('input:checkbox[name=ids]:checked').each(function(){
                    all_ids.push($(this).val());
                })

            $.ajax({
                url:"{{route('categorias.destroyAll')}}",
                type:"DELETE",
                data:{
                    ids=all_ids,
                    _token:'{{csrf_token()}}'
                },
                success:function(response){
                    $.each(all_ids, function(key, val) {
                        $('#categoria'+val).remove();
                    })
                }
            })
        })
    });
    </script> --}}
@endsection

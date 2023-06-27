<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use App\Models\Categoria;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('jogos.create', ['categorias' => $categorias]);
    }

    public function store(Request $request)
    {
        //Create com validação de informações
        $request->validate([
            'nome' => 'required|max:150',
            'categoria' => 'required',
            'ano_criacao' => 'required|max:4',
            'valor' => 'required|max:5',
        ]);

        $jogo = new Jogo();

        $jogo->nome = $request->input('nome');
        $jogo->ano_criacao = $request->input('ano_criacao');
        $jogo->valor = $request->input('valor');

        // Obtendo a categoria selecionada no formulário
        $categoria_id = $request->input('categoria');

        // Relacionando o jogo com a categoria selecionada
        $jogo->categoria()->associate($categoria_id);

        $jogo->save();
        return redirect()->route('jogos.index');
    }

    public function show(string $id)
    {

    }

    public function edit($id)
    {
        $jogos = Jogo::findOrFail($id);
        $categorias = Categoria::all();

        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos, 'categorias' => $categorias]);
        } else {
            return redirect()->route('jogos.index');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:150',
            'categoria_id' => 'required',
            'ano_criacao' => 'required|max:4',
            'valor' => 'required|max:5',
        ]);

        // Recuperar o jogo existente com a categoria associada
        $jogo = Jogo::with('categoria')->findOrFail($id);

        $data = [
        // Atualizar os atributos do jogo
        'nome' => $request->input('nome'),
        'ano_criacao' => $request->input('ano_criacao'),
        'valor' => $request->input('valor'),
        ];

        // Recuperar a categoria do banco de dados,
        $categoriaId = $request->input('categoria_id');
        $categoria = Categoria::findOrFail($categoriaId);

        // Associar a nova categoria ao jogo
        $jogo->categoria()->associate($categoria);


        $jogo->update($data);
        return redirect()->route('jogos.index');
    }

    public function destroy($id)
    {
        $jogos = Jogo::findOrFail($id);
        $jogos->delete();

        return redirect()->route('jogos.index');

    }
}

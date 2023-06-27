<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use App\Models\Categoria;

class JogosController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('jogos.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Create com validação de informações
        $request -> validate([
            'nome' => 'required|min:3|max:150',
            'categoria' => 'required',
            'ano_criacao' => 'required|max:4',
            'valor' => 'required|max:5',
        ]);

        $jogo = new Jogo();

        $jogo->nome = $request->input('nome');
        $jogo->ano_criacao = $request->input('ano_criacao');
        $jogo->valor = $request->input('valor');

        // Obtendo a categoria selecionada no formulário
        $categoriaId = $request->input('categoria');

        // Relacionando o jogo com a categoria selecionada
        $jogo->categoria()->associate($categoriaId);

        $jogo->save();

        Jogo::create($request->all());
        return redirect()->route('jogos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jogos = Jogo::findOrFail($id);

        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor
        ];
        $jogos = Jogo::findOrFail($id);
        $jogos->update($data);
        return redirect()->route('jogos.index');

        //Feito pela CHATGPT
    /*
        $data = [
            'nome' => $request->input('nome'),
            'categoria' => $request->input('categoria'),
            'ano_criacao' => $request->input('ano_criacao'),
            'valor' => $request->input('valor')
        ];
    */

        $jogos = Jogo::findOrFail($id);
        $jogos->update($data);
        return redirect()->route('jogos.index');

        /*
        Update com validação de Informações
        $data = [
            $request -> validate([
                'nome' => 'required|max:60',
                'categoria' => 'required',
                'ano_criacao' => 'required|max:4',
                'valor' => 'required|max:5',
            ])
        ];
        */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jogos = Jogo::findOrFail($id);
        $jogos->delete();

        return redirect()->route('jogos.index');

    }

    // public function destroyAll($id)
    // {
    //     $jogos = Jogo::findOrFail($id);
    //     $jogos->delete();

    //     return redirect()->route('jogos.index');
    // }
}

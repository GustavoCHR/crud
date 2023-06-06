<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

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
        return view('jogos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        $jogos = Jogo::where('id', $id)->first();
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
        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Jogo::where('id', $id)->delete();
        return redirect()->route('jogos.index');
    }
}

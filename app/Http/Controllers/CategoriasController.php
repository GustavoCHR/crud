<?php
namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nome' => 'required|min:3|max:150',
        ]);
        Categoria::create($request->all());
        return redirect()->route('categorias.index');
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
    public function edit(string $id)
    {
        $categorias = Categoria::findOrFail($id);

        if (!empty($categorias)) {
            return view('categorias.edit', ['categorias' => $categorias]);
        } else {
            return redirect()->route('categorias.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nome' => $request->nome,
        ];

        $categoria = Categoria::findOrFail($id);
        $categoria = update($data);
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->delete();

        return redirect()->route('categorias.index');
    }

    public function destroyAll($id)
    {
        $jogos = Categoria::findOrFail($id);
        $jogos->delete();

        return redirect()->route('categorias.index');
    }
}

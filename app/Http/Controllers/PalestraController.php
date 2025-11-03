<?php

namespace App\Http\Controllers;

use App\Models\Palestra;
use Illuminate\Http\Request;

class PalestraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $palestras = Palestra::orderBy('data', 'desc')->get();
        return view('palestras.index', compact('palestras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('palestras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'min:3', 'max:255'],
            'palestrante' => ['required', 'min:3', 'max:255'],
            'data' => ['required', 'date'],
            'local' => ['required', 'min:2', 'max:255'],
            'descricao' => ['nullable', 'min:3'],
        ]);

        Palestra::create($dados);

        return redirect()->route('palestras.index')->with('sucesso', 'Palestra cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Palestra $palestra)
    {
        return view('palestras.show', compact('palestra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Palestra $palestra)
    {
        return view('palestras.edit', compact('palestra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Palestra $palestra)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'min:3', 'max:255'],
            'palestrante' => ['required', 'min:3', 'max:255'],
            'data' => ['required', 'date'],
            'local' => ['required', 'min:2', 'max:255'],
            'descricao' => ['nullable', 'min:3'],
        ]);
        
        $palestra->update($dados);
        
        return redirect()->route('palestras.index')->with('sucesso', 'Palestra atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Palestra $palestra)
    {
        $palestra->delete();
        
        return redirect()->route('palestras.index')->with('sucesso', 'Palestra removida com sucesso!');
    }
}

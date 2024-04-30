<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagamentos = Pagamento::all();

        return view('pagamentos.index', compact('pagamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('pagamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pagamento = new Pagamento([
            'id_reserva' => 'required|exists:reservas,id',
            'metodo_de_pagamento' => $request->input('metodo_de_pagamento'),
            'data_de_pagamento' => $request->input('data_de_pagamento')
        ]);

        $pagamento->save();

        return redirect()->route('pagamentos.create')->with('success', 'Pagamento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pagamento = Pagamento::findOrFail($id);
        
        return view('pagamento.show', compact('pagamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pagamento = Pagamento::findOrFail($id);
        
        return view('pagamento.edit', compact('pagamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pagamento = Pagamento::findOrFail($id);

        $pagamento->metodo_de_pagamento = $request->input('metodo_de_pagamento');
        $pagamento->data_de_pagamento = $request->input('data_de_pagamento');

        $pagamento->save();
    
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento criado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pagamento = Pagamento::findOrFail($id);

        $pagamento->delete();

        return redirect()->route('pagamentos.index')->with('success', 'Pagamento excluido com sucesso!');
    }
}
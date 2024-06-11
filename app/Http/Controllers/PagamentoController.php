<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Models\Reserva;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagamentos = Pagamento::paginate(10);
        return view('pagamentos.index', compact('pagamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservas = Reserva::all(); // Assuming Reserva is the model for reservations

        return view('pagamentos.create', compact('reservas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_reserva' => 'required|exists:reservas,id',
            'metodo_de_pagamento' => 'required',
            'data_pagamento' => 'required|date',
        ]);    
    
        $pagamento = new Pagamento();
        
        $pagamento->id_reserva = $request->input('id_reserva');
        $pagamento->metodo_de_pagamento = $request->input('metodo_de_pagamento');
        $pagamento->data_de_pagamento = $request->input('data_pagamento');
        
        $pagamento->save();
        
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pagamento = Pagamento::findOrFail($id);
        
        return view('pagamentos.show', compact('pagamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pagamento = Pagamento::findOrFail($id);
        
        return view('pagamentos.edit', compact('pagamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_reserva' => 'required|exists:reservas,id',
            'metodo_de_pagamento' => 'required',
            'data_pagamento' => 'required|date',
        ]); 

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

        return redirect()->route('pagamentos.index')->with('success');
    }
}
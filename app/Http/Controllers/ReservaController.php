<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reserva;
use App\Models\Quadra;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::paginate(10);
        return view('reservas.index', compact('reservas'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quadras = Quadra::all(); 

        return view('reservas.create', compact('quadras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_quadra' => 'required|exists:quadras,id',
            'responsavel' => 'required',
            'valor_da_reserva' => 'required',
            'data_da_reserva' => 'required',
        ]);    
        
        $quadra = Quadra::find($request->quadra_id);
        $valor_da_reserva = $quadra->valor_quadra;

        Reserva::create($request->all());

        return redirect()->route('reservas.index')->with('success', 'Reserva criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('reservas.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservas = Reserva::findOrFail($id);

        $quadras = Quadra::all();

        return view('reservas.edit', compact('reservas', 'quadras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->update($request->all());
        return redirect()->route('reservas.index')->with('success', 'Reserva atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();
        return redirect()->route('reservas.index')->with('success', 'Reserva excluída com sucesso!');
    }
}

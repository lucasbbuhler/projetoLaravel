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
        $reservas = Reserva::all();
        return view('reservas.create', compact('quadras', 'reservas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'quadra_id' => 'required|exists:quadras,id',
            'responsavel' => 'required|string|max:255',
            'data_reserva' => 'required|date|after:today',
        ]);

        $quadra = Quadra::find($request->quadra_id);
        
        $reserva = new Reserva([
            'id_quadra' => $request->quadra_id,
            'responsavel' => $request->responsavel,
            'data_da_reserva' => $request->data_reserva,
        ]);
    
        $reserva->valor_da_reserva = $quadra->valor_quadra;
    
        $reserva->save();
        
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

        $request->validate([
            'quadra_id' => 'required|exists:quadras,id',
            'responsavel' => 'required|string|max:255',
            'data_reserva' => 'required|date|after:today',
        ]);

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

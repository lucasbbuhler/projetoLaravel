<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quadra;

class QuadraController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $quadras = Quadra::paginate(10);
        return view('quadras.index', compact('quadras'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quadras.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'valor_quadra' => 'required|numeric|min:100',
            'tipo_quadra' => 'required|string|max:50',
        ]);

        $quadra = new Quadra([
            'valor_quadra' => $request->input('valor_quadra'),
            'tipo_quadra' => $request->input('tipo_quadra')
        ]);

        $quadra->save();

        return redirect()->route('quadras.index')->with('success', 'Quadra criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $quadra = Quadra::findOrFail($id);
        
        return view('quadras.show', compact('quadra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $quadra = Quadra::findOrFail($id);
        
        return view('quadras.edit', compact('quadra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'valor_quadra' => 'required|numeric|min:100',
            'tipo_quadra' => 'required|string|max:50',
        ]);
        
        $quadra = Quadra::findOrFail($id);
        
        $quadra->tipo_quadra = $request->input('valor_quadra');
        $quadra->tipo_quadra = $request->input('tipo_quadra');
        
        $quadra->update($request->all());
        
        return redirect()->route('quadras.index')->with('success', 'Quadra atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $quadra = Quadra::findOrFail($id);
        
        $quadra->delete();
    
        return redirect()->route('quadras.index')->with('success', 'Quadra excluida com sucesso!');
    }
}

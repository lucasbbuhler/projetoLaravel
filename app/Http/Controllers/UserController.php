<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
       ]);

       $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $request->input('password')
       ]);

       $user->save();

       return redirect()->route('users.index')->with('success', 'User criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
        $user->update($request->all());
        
        return redirect()->route('users.index')->with('success', 'User atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        
        $user->delete();
    
        return redirect()->route('users.index')->with('success', 'User excluido com sucesso!');
    }
}

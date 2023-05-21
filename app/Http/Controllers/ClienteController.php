<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::all();
        return view('clientes/index-cliente', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('clientes/create-cliente');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       
        $request->validate([
            'nomb_cli' => ['required', 'max:255'],
            'correo_cli' => ['required', 'max:255'],
            'dir_cli' => ['required', 'max:255'],
            'tel_cli' => ['required', 'max:20']
        ]);
        Cliente::create($request->all());
    
        return ClienteController::index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        // dd($cliente);
        $nomb = $cliente->nomb_cli;
    
         $prod =  $cliente->productos()->get();
        // dd($cliente->productos);
        return view('relaciones/ver-producto', compact('prod', 'nomb'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes/edit-cliente', compact('cliente')); 
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        Cliente::where('id', $cliente->id)->update($request->except('_token','_method'));

        return ClienteController::index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}

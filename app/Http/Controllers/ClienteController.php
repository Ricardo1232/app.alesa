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
            'tel_cli' => ['required', 'integer']
        ]);
        $cliente = new Cliente();
        $cliente->nomb_cli      = $request->nomb_cli;
        $cliente->correo_cli    = $request->correo_cli;
        $cliente->dir_cli       = $request->dir_cli;
        $cliente->tel_cli       = $request->tel_cli;
        $cliente->save();
    
        return ClienteController::index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes/show-cliente', compact('cliente'));
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
        $request->validate([
            'nomb_cli' => ['required', 'max:255'],
            'correo_cli' => ['required', 'max:255'],
            'dir_cli' => ['required', 'max:255'],
            'tel_cli' => ['required', 'integer']
        ]);
        $cliente->nomb_cli      = $request->nomb_cli;
        $cliente->correo_cli    = $request->correo_cli;
        $cliente->dir_cli       = $request->dir_cli;
        $cliente->tel_cli       = $request->tel_cli;
        $cliente->save();

        return redirect()->route('clientes.show', $cliente);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}

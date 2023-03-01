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
        $cli = Cliente::all();
        return view('clientes/index-cliente', compact('cli'));
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
        // dd($request->all());
        $cli = new Cliente();
        $cli->nomb_cli = $request->nomb_cli;
        $cli->correo_cli = $request->correo_cli;
        $cli->dir_cli = $request->dir_cli;
        $cli->tel_cli = $request->tel_cli;
        $cli->save();
    
        return ClienteController::index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}

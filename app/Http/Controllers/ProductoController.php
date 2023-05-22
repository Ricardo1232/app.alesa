<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Producto::all();
        $archivo = session('archivo');
        return view('productos/index-producto', compact('producto', 'archivo'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $this->authorize('producto.create');
        return view('productos/create-producto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomb_prod' => ['required', 'max:255'],
            'desc_prod' => ['required', 'max:255'],
            'prec_prod' => ['required', 'numeric'],
            'cant_prod' => ['required', 'integer']
        ]);
        Producto::create($request->all());

        return redirect()->route('productos.index')->with('archivo', 'agregado');

    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos/show-producto', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('productos/edit-producto', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        Producto::where('id', $producto->id)->update($request->except('_token', '_method'));

        return redirect()->route('productos.index')->with('archivo', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index')->with('archivo', 'eliminado');
    }
}

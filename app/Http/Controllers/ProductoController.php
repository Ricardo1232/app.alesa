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
        return view('productos/index-producto', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
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
            'cant_prod' => ['required', 'integer'],
            'prec_prod' => ['required', 'numeric']
        ]);
        // dd($request->all());
        $prod = new Producto();
        $prod->nomb_prod = $request->nomb_prod;
        $prod->desc_prod = $request->desc_prod;
        $prod->cant_prod = $request->cant_prod;
        $prod->prec_prod = $request->prec_prod;
        $prod->save();
    
        return ProductoController::index();
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
        $producto->nomb_prod = $request->nomb_prod;
        $producto->desc_prod = $request->desc_prod;
        $producto->cant_prod = $request->cant_prod;
        $producto->prec_prod = $request->prec_prod;
        $producto->save();

        return redirect()->route('productos.show', $producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}

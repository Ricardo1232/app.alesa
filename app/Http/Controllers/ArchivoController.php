<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $file = Archivo::all();
        $archivo = session('archivo');
        return view('files.index-file', compact('file', 'archivo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.create-file');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'archivo' => 'required|file|max:2048',
        ]);

        if ($request->hasFile('archivo')) {

            $archivo = $request->file('archivo');
            $ruta = $archivo->store('archivos');
            $nombreOriginal = $archivo->getClientOriginalName();
            $extension = $archivo->getClientOriginalExtension();

            $archivo = new Archivo();
            $archivo->nombre = $nombreOriginal;
            $archivo->ruta   = $ruta;
            $archivo->ext    = $extension;
            $archivo->save();

            return redirect()->route('archivos.index')->with('archivo', 'agregado');
        }

        return redirect()->back()->with('error', 'No se ha seleccionado ningún archivo.');
    }


    public function descargar(Archivo $archivo)
    {
        return Storage::download($archivo->ruta, $archivo->nombre, ['Content-Type' => $archivo->ext]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archivo $archivo)
    {
        return view('archivos.edit', compact('archivo'));
    }

    public function update(Request $request, Archivo $archivo)
    {
        $request->validate([
            'archivo' => 'nullable|file|max:2048',
        ]);

        if ($request->hasFile('archivo')) {
            $archivoAnterior = $archivo->ruta_archivo;
            Storage::delete($archivoAnterior);

            $archivoNuevo = $request->file('archivo');
            $ruta = $archivoNuevo->store('archivos');

            $archivo->nombre_archivo = $archivoNuevo->getClientOriginalName();
            $archivo->ruta_archivo = $ruta;
        }

        $archivo->save();

        return redirect()->route('archivos.index')->with('archivo', 'update');
    }

    public function destroy(Archivo $archivo)
    {

        Storage::delete($archivo->ruta);

        $archivo->delete();
       
        return redirect()->route('archivos.index')->with('archivo', 'eliminado');
    
    }
}

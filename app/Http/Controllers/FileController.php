<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $file = File::all();
        return view('file.index-file', compact('file'));
    }

    public function create()
    {
        return view('file.create-file');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $ruta = $file->store('archivos');

            $archivoModelo = new File();
            $archivoModelo->nombre_archivo = $file->getClientOriginalName();
            $archivoModelo->ruta_archivo = $ruta;
            $archivoModelo->save();

            return redirect()->route('archivos.index')->with('success', 'El file se ha guardado exitosamente.');
        }

        return redirect()->back()->with('error', 'No se ha seleccionado ningún file.');
    }

    public function show(File $file)
    {
        return view('archivos.show', compact('file'));
    }

    public function edit(File $file)
    {
        return view('archivos.edit', compact('file'));
    }

    public function update(Request $request, File $file)
    {
        $request->validate([
            'file' => 'nullable|file|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $archivoAnterior = $file->ruta_archivo;
            Storage::delete($archivoAnterior);

            $archivoNuevo = $request->file('file');
            $ruta = $archivoNuevo->store('archivos');

            $file->nombre_archivo = $archivoNuevo->getClientOriginalName();
            $file->ruta_archivo = $ruta;
        }

        $file->save();

        return redirect()->route('archivos.index')->with('success', 'El file se ha actualizado exitosamente.');
    }

    public function destroy(File $file)
    {
        $file->delete();
        Storage::delete($file->ruta_archivo);

        return redirect()->route('archivos.index')->with('success', 'El file se ha eliminado exitosamente.');
    }
}
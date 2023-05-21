<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ArchivoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index-alesa');
});

Route::resource('productos', ProductoController::class)->middleware('auth');
Route::resource('clientes', ClienteController::class)->middleware('auth');

Route::resource('archivos', ArchivoController::class)->middleware('auth');
Route::get('archivos/descargar/{archivo}', [ArchivoController::class, 'descargar'])->name('archivos.descargar');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index-alesa');
    })->name('dashboard');
});

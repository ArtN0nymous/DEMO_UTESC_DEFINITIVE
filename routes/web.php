<?php

use App\Http\Controllers\articuloController;
use App\Http\Controllers\bodegaController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\marcaController;
use App\Http\Controllers\proveedorController;
use App\Http\Controllers\subcategoriaController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/registrar-usuario', function () {
    return view('registro_usuario');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/bodega',[bodegaController::class,'mostrar'])->name('bodega.mostrar');
Route::post('/categoria/guardar',[categoriaController::class,'insertar'])->name('categoria.insertar');
Route::post('/sucategoria/guardar', [subcategoriaController::class,'insertar'])->name('subcategoria.insertar');
Route::post('/proveedor/guardar', [proveedorController::class,'guardar'])->name('proveedor.insertar');
Route::delete('/categoria/eliminar/{pk_categoria}',[categoriaController::class,'eliminar'])->name('categoria.eliminar');
Route::delete('/subcategoria/eliminar/{pk_subcategoria}',[subcategoriaController::class,'eliminar'])->name('subcategoria.eliminar');
Route::delete('/proveedor/eliminar/{pk_proveedor}',[proveedorController::class,'eliminar'])->name('proveedor.eliminar');
Route::delete('/marca/eliminar/{pk_marca}',[marcaController::class,'eliminar'])->name('marca.eliminar');
Route::delete('/articulo/eliminar/{pk_articulo}',[articuloController::class,'eliminar'])->name('articulo.eliminar');
Route::post('/marca/guardar',[marcaController::class,'insertar'])->name('marca.insertar');
Route::post('/articulo/guardar',[articuloController::class,'insertar'])->name('articulo.insertar');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

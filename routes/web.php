<?php

use App\Http\Controllers\ajaxController;
use App\Http\Controllers\articuloController;
use App\Http\Controllers\bodegaController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\marcaController;
use App\Http\Controllers\proveedorController;
use App\Http\Controllers\subcategoriaController;
use App\Http\Controllers\usuariosController;
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
Route::post('/marca/guardar',[marcaController::class,'insertar'])->name('marca.insertar');
Route::post('/articulo/guardar',[articuloController::class,'insertar'])->name('articulo.insertar');

Route::delete('/categoria/eliminar/{pk_categoria}',[categoriaController::class,'eliminar'])->name('categoria.eliminar');
Route::delete('/subcategoria/eliminar/{pk_subcategoria}',[subcategoriaController::class,'eliminar'])->name('subcategoria.eliminar');
Route::delete('/proveedor/eliminar/{pk_proveedor}',[proveedorController::class,'eliminar'])->name('proveedor.eliminar');
Route::delete('/marca/eliminar/{pk_marca}',[marcaController::class,'eliminar'])->name('marca.eliminar');
Route::delete('/articulo/eliminar/{pk_articulo}',[articuloController::class,'eliminar'])->name('articulo.eliminar');

Route::put('/categoria/actualizar/{pk_categoria}',[categoriaController::class,'actualizar'])->name('categoria.actualizar');
Route::put('/subcategoria/actualizar/{pk_subcategoria}',[subcategoriaController::class,'actualizar'])->name('subcategoria.actualizar');
Route::put('/proveedor/actualizar/{pk_proveedor}',[proveedorController::class,'actualizar'])->name('proveedor.actualizar');
Route::put('/marca/actualizar/{pk_marca}',[marcaController::class,'actualizar'])->name('marca.actualizar');
Route::put('/articulo/actualizar/{pk_articulo}',[articuloController::class,'actualizar'])->name('articulo.actualizar');
Route::put('/usuarios/actualizar/{id}',[usuariosController::class,'actualizar'])->name('usuarios.actualizar');

Route::get('/getCategoria/{pk_categoria}',[ajaxController::class,'categoria'])->name('categoria.editar');
Route::get('/getSubcategoria/{pk_subcategoria}',[ajaxController::class,'subcategoria'])->name('subcategoria.editar');
Route::get('/getProveedor/{pk_proveedor}',[ajaxController::class,'proveedor'])->name('proveedor.editar');
Route::get('/getMarca/{pk_marca}',[ajaxController::class,'marca'])->name('marca.editar');
Route::get('/getArticulo/{pk_articulo}',[ajaxController::class,'articulo'])->name('articulo.editar');
Route::get('/getCategorias',[ajaxController::class,'categorias'])->name('subcategoria_categorias.editar');
Route::get('/getSubcategorias',[ajaxController::class,'subcategorias'])->name('articulo_subcategorias.editar');
Route::get('/getProveedores',[ajaxController::class,'proveedores'])->name('articulo_proveedores.editar');
Route::get('/getMarcas',[ajaxController::class,'marcas'])->name('articulo_marcas.editar');

Route::get('/getUsers', [usuariosController::class, 'getUsers']) ->name('usuarios.getUsers');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

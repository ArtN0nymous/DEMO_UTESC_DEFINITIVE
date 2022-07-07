<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/solicitudes',function(){
    return view('solicitudes');
});


<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
class categoriaController extends Controller
{
    public function insertar(Request $req){
        $Categoria = new Categoria();
        $Categoria->nombre_cat=$req->nombre;
        $Categoria->save();
        return redirect()->route('bodega.mostrar');
    }
    public function eliminar(Categoria $pk_categoria){
        $pk_categoria->delete();
        return redirect()->route('bodega.mostrar');
    }
}

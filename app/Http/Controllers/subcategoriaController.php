<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class subcategoriaController extends Controller
{
    public function insertar(Request $req){
        $sub = new Subcategoria();
        $sub ->nombre_Sub=$req->nombre;
        $sub->fk_categoria=$req->categoria;
        $sub->save();
        return redirect()->route('bodega.mostrar');
    }
    public function eliminar(Subcategoria $pk_subcategoria){
        $pk_subcategoria->delete();
        return redirect()->route('bodega.mostrar');
    }
}

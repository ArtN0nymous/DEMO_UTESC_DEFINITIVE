<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Proveedor;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
class ajaxController extends Controller
{
    public function categoria(Categoria $pk_categoria) {
        return response()->json(array('categoria'=> $pk_categoria), 200);
    }
    public function subcategoria(Subcategoria $pk_subcategoria)
    {
        return response()->json(array('subcategoria'=>$pk_subcategoria),200);
    }
    public function categorias(Categoria $pk_categoria)
    {
        $categorias = Categoria::all();
        return response()->json(array('categorias'=>$categorias),200);
    }
    public function proveedor(Proveedor $pk_proveedor)
    {
        return response()->json(array('proveedor'=>$pk_proveedor),200);
    }
}

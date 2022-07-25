<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Proveedor;
use App\Models\Subcategoria;
use App\Models\User;
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
    public function marca(Marca $pk_marca)
    {
        return response()->json(array('marca'=>$pk_marca),200);
    }
    public function subcategorias(Subcategoria $pk_subcategoria)
    {   $subcategorias = Subcategoria::all();
        return response()->json(array('subcategorias'=>$subcategorias),200);
    }
    public function proveedores(Proveedor $pk_proveedor)
    {   $proveedores = Proveedor::all();
        return response()->json(array('proveedores'=>$proveedores),200);
    }
    public function marcas(Marca $pk_marca)
    {   $marcas = Marca::all();
        return response()->json(array('marcas'=>$marcas),200);
    }
    public function articulo(Articulo $pk_articulo)
    {
        return response()->json(array('articulo'=>$pk_articulo),200);
    }
    public function usuarios(User $id)
    {
        $usuarios = User::all();
        return response()->json(array('usuarios'=>$usuarios),200);
    }
}

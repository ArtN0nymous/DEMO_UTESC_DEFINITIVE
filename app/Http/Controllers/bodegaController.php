<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Proveedor;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
class bodegaController extends Controller
{
    public function mostrar(){
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        $proveedores=Proveedor::all();
        $marcas=Marca::all();
        $articulos=Articulo::select('pk_articulo','nombre_art','solicitados','existencia_pz','minimos','maximos','fecha','descripcion','pedir','status','marcas.marca_n as marca','proveedores.nombre_p as proveedor','subcategorias.nombre_Sub as subcategoria')
        ->join('marcas','inventario.fk_marca','=','marcas.pk_marca')
        ->join('proveedores','inventario.fk_proveedor','=','proveedores.pk_proveedor')
        ->join('subcategorias','inventario.fk_subcategoria','=','subcategorias.pk_subcategoria')
        ->get();
        return view('bodega')
        ->with(compact('categorias'))
        ->with(compact('subcategorias'))
        ->with(compact('proveedores'))
        ->with(compact('marcas'))
        ->with(compact('articulos'));
    }
}

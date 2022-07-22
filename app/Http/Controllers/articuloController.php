<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class articuloController extends Controller
{
    public function insertar(Request $req){
        $articulo = new Articulo();
        $articulo->nombre_art=$req->nombre;
        $articulo->solicitados='0';
        $articulo->existencia_pz=$req->cantidad;
        $articulo->minimos='0';
        $articulo->maximos=$req->maximos;
        $articulo->fecha='1999-01-01-00:00:00';
        $articulo->descripcion=$req->descripcion;
        $articulo->pedir='0';
        $articulo->status='V';
        $articulo->fk_marca=$req->marca;
        $articulo->fk_proveedor=$req->proveedor;
        $articulo->fk_subcategoria=$req->subcategoria;
        $articulo->save();
        return redirect()->route('bodega.mostrar');
    }
    public function eliminar(Articulo $pk_articulo){
        $pk_articulo->delete();
        return redirect()->route('bodega.mostrar');
    }
    public function actualizar(Articulo $articulo,Request $req)
    {
        $articulo->nombre_art=$req->nombre;
        //$articulo->solicitados='0';
        $articulo->existencia_pz=$req->cantidad;
        //$articulo->minimos='0';
        $articulo->maximos=$req->maximos;
        //$articulo->fecha='1999-01-01-00:00:00';
        $articulo->descripcion=$req->descripcion;
        //$articulo->pedir='0';
        //$articulo->status='V';
        $articulo->fk_marca=$req->marca;
        $articulo->fk_proveedor=$req->proveedor;
        $articulo->fk_subcategoria=$req->subcategoria;
        $articulo->save();
        return redirect()->route('bodega.mostrar');
    }
}

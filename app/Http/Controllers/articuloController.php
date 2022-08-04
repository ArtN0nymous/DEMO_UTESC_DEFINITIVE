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
    public function actualizar(Articulo $pk_articulo,Request $req)
    {
        $pk_articulo->nombre_art=$req->nombre;
        //$pk_articulo->solicitados=$pk_articulo->solicitados;
        $pk_articulo->existencia_pz=$req->cantidad;
        //$pk_articulo->minimos=$pk_articulo->minimos;
        $pk_articulo->maximos=$req->maximos;
        //$pk_articulo->fecha=$pk_articulo->fecha;
        $pk_articulo->descripcion=$req->descripcion;
        //$pk_articulo->pedir=$pk_articulo->pedir;
        //$pk_articulo->status=$pk_articulo->status;
        $pk_articulo->fk_marca=$req->fk_marca;
        $pk_articulo->fk_proveedor=$req->fk_proveedor;
        $pk_articulo->fk_subcategoria=$req->fk_subcategoria;
        $pk_articulo->save();
        return redirect()->route('bodega.mostrar');
    }
}

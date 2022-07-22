<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class proveedorController extends Controller
{
    public function guardar(Request $req){
        $prov = new Proveedor();
        $prov->nombre_p=$req->nombre;
        $prov->RFC=$req->rfc;
        $prov->direccion=$req->direccion;
        $prov->estatus='V';
        $prov->save();
        return redirect()->route('bodega.mostrar');
    }
    public function eliminar(Proveedor $pk_proveedor){
        $pk_proveedor->delete();
        return redirect()->route('bodega.mostrar');
    }
    public function actualizar(Proveedor $pk_proveedor,Request $req)
    {
        $pk_proveedor->nombre_p=$req->nombre;
        $pk_proveedor->RFC=$req->RFC;
        $pk_proveedor->direccion=$req->direccion;
        $pk_proveedor->save();
        return redirect()->route('bodega.mostrar');
    }
}

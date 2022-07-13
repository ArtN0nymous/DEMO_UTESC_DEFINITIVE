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
}

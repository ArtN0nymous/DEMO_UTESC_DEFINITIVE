<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subcategoria;
use Exception;
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
        $error='Error';
        try{
            $pk_subcategoria->delete();
            return redirect()->route('bodega.mostrar');
        }catch(Exception $e){
            return redirect()->route('bodega.mostrar',compact('e'));
        }
    }
    public function actualizar(Subcategoria $pk_subcategoria,Request $req)
    {
        print('ERROR');
        $pk_subcategoria->nombre_Sub=$req->nombre;
        $pk_subcategoria->fk_categoria=$req->fk_categoria;
        $pk_subcategoria->save();
        return redirect()->route('bodega.mostrar');
    }
}

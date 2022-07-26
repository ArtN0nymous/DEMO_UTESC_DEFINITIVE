<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Exception;
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
        $error ='Error';
        try{
            $pk_categoria->delete();
            return redirect()->route('bodega.mostrar');
        }catch(Exception $e){
            return redirect()->route('bodega.mostrar',compact('e'));
        }
    }
    public function actualizar(Categoria $pk_categoria,Request $req)
    {
        $pk_categoria->nombre_cat=$req->nombre;
        $pk_categoria->save();
        return redirect()->route('bodega.mostrar');
    }
}

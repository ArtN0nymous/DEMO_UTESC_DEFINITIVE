<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;
class marcaController extends Controller
{
    public function insertar(Request $req){
        $marca = new Marca();
        $marca->marca_n=$req->nombre;
        $marca->save();
        return redirect()->route('bodega.mostrar');
    }
    public function mostrar(){
        return 'mostrar';
    }
    public function eliminar(Marca $pk_marca){
        $pk_marca->delete();
        return redirect()->route('bodega.mostrar');
    }
}

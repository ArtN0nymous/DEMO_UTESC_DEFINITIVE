<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class usuariosController extends Controller
{
    function getUsers (){
        $usuarios = User::all();
  
        return view('usuarios', compact('usuarios'));
    }
    function actualizar(User $id, Request $req){ 
       switch ($req->profType){
            case 'on':
                $req->profType = 'a';
                break;
            case '':
                $req->profType = 'n';
                break;
       }
       $id->profType=$req->profType;
        $id->save();
        return redirect()->route('usuarios.getUsers');
    }
    public function eliminar(User $id){
        $id->delete();
        return redirect()->route('usuarios.getUsers');
    }
}

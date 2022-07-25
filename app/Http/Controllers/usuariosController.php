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
    function actualizar(User $usuario, Request $req){
        print($req);
        echo($req);
        // $usuario->profType=$req->profType;
        // $usuario->update();
        // return redirect()->route('usuarios.getUsers');
    }
}

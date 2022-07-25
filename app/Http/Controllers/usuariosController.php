<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class usuariosController extends Controller
{
    function getUsers (){
        $usuarios = User::all();
        // print($usuarios);
        // print($usuarios);
        // print($usuarios);
        return view('usuarios', compact('usuarios'));
    }
}

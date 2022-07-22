<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
class ajaxController extends Controller
{
    public function categoria(Categoria $pk_categoria) {
        return response()->json(array('categoria'=> $pk_categoria), 200);
    }
}

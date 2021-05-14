<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $apelido = $request -> apelido;
        $senha = $request -> senha;
        $usuarios = Usuario::where('apelido', '=', $apelido) -> where('senha', '=', $senha)->first();

        if(@$usuarios->id != null){
            return print("login validado.");
        }
        return print("credencias inválidas.");
    }
}

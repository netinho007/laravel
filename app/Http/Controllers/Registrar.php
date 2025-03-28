<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Uuario;

class Registrar extends Controller
{
    function registrar(){
        return View('registrar');
    }

    function criarConta(Request $request){
        dd($request->all());

        $usuario = new Usuario();
        $usuario->save($request->all());
    }
}

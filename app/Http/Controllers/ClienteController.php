<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    function formulario(){
        return view('cliente-formulario');

}
}

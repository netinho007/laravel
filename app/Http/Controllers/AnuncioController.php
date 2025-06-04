<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnuncioModel;

class AnuncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
    }

    function store(Request $dados){
        $anuncio = new AnuncioModel();
        $anuncio->create($dados->all());
    }   

}

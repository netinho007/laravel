<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'teste de laravel';
    }

    function teste(){
        echo 'Rota de teste';
    }
}

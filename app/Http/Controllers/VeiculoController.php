<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VeiculoModel;

class VeiculoController extends Controller
{
    function formulario(){
        return view('veiculo-formulario');
    }

    function store(Request $dados){
        $veiculo = new VeiculoModel();
        $veiculo->create($dados->all());
    }   

    function list(){
        $veiculo = VeiculoModel::all();
        return view('veiculo-listar',['veiculo' => $veiculo]);
    }

}

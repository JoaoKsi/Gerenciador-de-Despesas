<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiroController extends Controller
{
    public function exibirMensagem(){
        return "Hello World, sendo exibido pelo controller!";
    }
}

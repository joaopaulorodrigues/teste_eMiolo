<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
        $variavel = "Teste eMiolo";
        return view('welcome', [
            'title' => $variavel
        ]);
    }

    public function cadastrar(){
        echo "Tela Cadastro";
    }

    public function login(){
        echo "Tela Login";
    }
}

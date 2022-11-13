<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index (){
        return view('index');
    }

    // esse request do parametro vai receber os dados da requisição GET, POST etc
    public function form(Request $request){
        // acessa dados da requisição post
        $email = $request->email;
        $nome = $request->nome;
        $sobrenome = $request->sobrenome;
        
        echo "oi! este é o controller :)";
        echo "<br>";
        echo "Prezado(a) $nome $sobrenome seu cadastro foi realizado com sucesso! Em breve você receberá mais
        informações no e-mail $email";
    }

    public function cancelaCadastro(Request $request){
        // acessa dados da requisição post
        $email = $request->email;
        $nome = $request->nome;
        $sobrenome = $request->sobrenome;
        
        echo "oi! este é o controller :)";
        echo "<br>";
        echo "Prezado(a) $nome $sobrenome seu cadastro foi cancelado.";
    }
}

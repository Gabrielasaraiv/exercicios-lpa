<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(Request $request){ 
    $name = $request->input('name'); 
    return $name; 
}); 

Route::get('receber/name/idade', function(Request $request){ 

    $nome = $request->input('nome'); 

    $idade = $request->input('idade'); 

    return 'Meu nome é ' . $nome . ', e minha idade é ' . $idade ; 

}); 

Route::get('receber/nome/ano/nascimento/cidade/natal', function(Request $request){ 

    $nome = $request->input('nome'); 

    $ano = $request->input('ano'); 

    $cidade = $request->input('cidade'); 

    return 'Meu nome é ' . $nome . ', nasci no ano de ' . $ano . ' e minha cidade natal é ' 

     . $cidade; 

}); 

Route::get('receber/numeros', function(Request $request){ 

    $primeiroNumero = $request->input('primeiroNumero'); 

    $segundoNumero = $request->input('segundoNumero'); 

    $resultado = $primeiroNumero + $segundoNumero; 

    return $primeiroNumero . '+' . $segundoNumero . '=' . $resultado; 

}); 
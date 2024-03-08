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
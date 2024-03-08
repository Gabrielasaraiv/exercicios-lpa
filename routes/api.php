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

Route::get('receber/numeros', function(Request $request){ 

    $primeiroNumero = $request->input('primeiroNumero'); 

    $segundoNumero = $request->input('segundoNumero'); 

    $resultado = $primeiroNumero - $segundoNumero; 

    return $primeiroNumero . '-' . $segundoNumero . '=' . $resultado; 

}); 

Route::get('receber/numeros', function(Request $request){ 

    $primeiroNumero = $request->input('primeiroNumero'); 
    
    $segundoNumero = $request->input('segundoNumero'); 
    
    $resultado = $primeiroNumero / $segundoNumero; 
    
    return $primeiroNumero . '/' . $segundoNumero . '=' . $resultado; 
    
    });

    Route::get('receber/numero', function(Request $request){ 

        $primeiroNumero = $request->input('n1'); 
        
        $segundoNumero =$request->input('n2'); 
        
        $resultado = $primeiroNumero *$segundoNumero; 
        
        return $primeiroNumero . 'x' . $segundoNumero . '=' . $resultado; 
        
        }); 

        Route::get('receber/notas', function(Request $request){ 

            $primeiraNota =$request->input('n1'); 
            
            $segundaNota = $request->input('n2'); 
            
            $terceiraNota = $request->input('n3'); 
            
            $quartaNota = $request->input('n4'); 
            
            $quintaNota = $request->input('n5'); 
            
            $resultado = ($primeiraNota +$segundaNota + $terceiraNota + $quartaNota + $quintaNota)/ 5; 
            
            return 'A média é =' . $resultado; 
            
            }); 


            Route::get('receber/numero', function (Request $request) { 

                $primeiroNumero= $request->input('n1'); 
            
                $segundoNumero = $request->input('n2'); 
            
            $resultado = $segundoNumero / $primeiroNumero; 
            
            return $segundoNumero . '/' . $primeiroNumero . '=' . $resultado; 
            
            }); 


            Route::get('receber/numeros', function (Request $request) { 

                $primeiroNumero= $request->input('n1'); 
            
                 
            
            $resultado = $primeiroNumero * 2; 
            
             
            
            return 'O dobro de ' . $primeiroNumero . ' é igual a: ' . $resultado; 
            
            }); 


            Route::get('area/retangulo', function (Request $request) { 

                $primeiroLado = $request->input('L1'); 
            
                $segundoLado = $request->input('L2'); 
            
                $resultado = $primeiroLado * $segundoLado; 
            
                return 'Os lados de um retângulo são ' . $primeiroLado . ' e ' . $segundoLado . ' sendo assim, a área do retângulo é ' . $resultado; 
            
            }); 

            Route::get('valores', function(Request $request){ 

                $preçoOriginal = $request->input('preçoInicial'); 
                
                $porcentagem = $request->input('porcentagem'); 
                
                $desconto = $porcentagem * $preçoOriginal / 100; 
                
                $valorFinal = $preçoOriginal - $desconto; 
                
                return 'O valor final do produto é de ' . $valorFinal; 
                
                }); 

                Route::get('aumento/salarial', function(Request $request){ 

                    $salarioInicial = $request->input('salarioInicial'); 
                    
                    $porcentagem = $request->input('porcentagem'); 
                    
                    $aumento = $porcentagem * $salarioInicial / 100; 
                    
                    $salarioFinal = $salarioInicial + $aumento; 
                    
                    return 'o salário inicial é de ' . $salarioInicial . ' e o percentual de aumento é de ' . $porcentagem  
                    
                    . '% sendo assim, o salário final é de ' . $salarioFinal; 
                    
                    }); 
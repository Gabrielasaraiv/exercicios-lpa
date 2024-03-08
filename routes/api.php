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

                    Route::get('recompensa', function(Request $request){ 

                        $valorDaCompra = $request->input('valordacompra'); 
                        
                        $pontos = $valorDaCompra / 10; 
                        
                        return 'o valor da compra foi de ' . $valorDaCompra . ' e a quantidade de pontos ganhos foi de '  
                        
                        . $pontos; 
                        
                        });


                        Route::get('comissao', function(Request $request){ 

                            $vendas = $request->input('vendas'); 
                            
                            $comissao = $vendas * 5 /100; 
                            
                             
                            
                            return 'o total de vendas foi de R$' . $vendas . ' e a comissão tem o valor de R$' . $comissao; 
                            
                            }); 


                            Route::get('numero/dias', function(Request $request){ 

                                $numeroDeDias = $request->input('dias'); 
                                
                                $horas = $numeroDeDias *24; 
                                
                                $minutos = $horas *60 ; 
                                
                                $segundos= $minutos *60; 
                                
                                return 'o numero de dias é ' . $numeroDeDias . ' e a quantidade de horas desses dias é de ' . $horas . 'horas. Essa quantidade de dias tem ' 
                                
                                . $minutos . 'minutos. Essa quantidade de dias também tem ' . $segundos . 'segundos.'; 
                                
                                }); 


                                Route::get('receber/total', function(Request $request){
                                    $preçoProduto = $request->input('preço');
                                    $quantidade = $request->input('quantidade');
                                    $total= $preçoProduto * $quantidade;
                                    return 'O preço do produto é de R$' . $preçoProduto . ' e a quantidade comprada foi de '. $quantidade . ' vezes. Sendo assim, o toal da compra é de R$' . $total;
                                });
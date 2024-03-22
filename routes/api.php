<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psy\CodeCleaner\ReturnTypePass;

Route::get('receber/nome', function (Request $request) {
    $name = $request->input('name');
    return $name;
});

Route::get('receber/name/idade', function (Request $request) {

    $nome = $request->input('nome');

    $idade = $request->input('idade');

    return 'Meu nome é ' . $nome . ', e minha idade é ' . $idade;
});

Route::get('receber/nome/ano/nascimento/cidade/natal', function (Request $request) {

    $nome = $request->input('nome');

    $ano = $request->input('ano');

    $cidade = $request->input('cidade');

    return 'Meu nome é ' . $nome . ', nasci no ano de ' . $ano . ' e minha cidade natal é '

        . $cidade;
});

Route::get('receber/numeros', function (Request $request) {

    $primeiroNumero = $request->input('primeiroNumero');

    $segundoNumero = $request->input('segundoNumero');

    $resultado = $primeiroNumero + $segundoNumero;

    return $primeiroNumero . '+' . $segundoNumero . '=' . $resultado;
});

Route::get('receber/numeros', function (Request $request) {

    $primeiroNumero = $request->input('primeiroNumero');

    $segundoNumero = $request->input('segundoNumero');

    $resultado = $primeiroNumero - $segundoNumero;

    return $primeiroNumero . '-' . $segundoNumero . '=' . $resultado;
});

Route::get('receber/numeros', function (Request $request) {

    $primeiroNumero = $request->input('primeiroNumero');

    $segundoNumero = $request->input('segundoNumero');

    $resultado = $primeiroNumero / $segundoNumero;

    return $primeiroNumero . '/' . $segundoNumero . '=' . $resultado;
});

Route::get('receber/numero', function (Request $request) {

    $primeiroNumero = $request->input('n1');

    $segundoNumero = $request->input('n2');

    $resultado = $primeiroNumero * $segundoNumero;

    return $primeiroNumero . 'x' . $segundoNumero . '=' . $resultado;
});

Route::get('receber/notas', function (Request $request) {

    $primeiraNota = $request->input('n1');

    $segundaNota = $request->input('n2');

    $terceiraNota = $request->input('n3');

    $quartaNota = $request->input('n4');

    $quintaNota = $request->input('n5');

    $resultado = ($primeiraNota + $segundaNota + $terceiraNota + $quartaNota + $quintaNota) / 5;

    return 'A média é =' . $resultado;
});


Route::get('receber/numero', function (Request $request) {

    $primeiroNumero = $request->input('n1');

    $segundoNumero = $request->input('n2');

    $resultado = $segundoNumero / $primeiroNumero;

    return $segundoNumero . '/' . $primeiroNumero . '=' . $resultado;
});


Route::get('receber/numeros', function (Request $request) {

    $primeiroNumero = $request->input('n1');



    $resultado = $primeiroNumero * 2;



    return 'O dobro de ' . $primeiroNumero . ' é igual a: ' . $resultado;
});


Route::get('area/retangulo', function (Request $request) {

    $primeiroLado = $request->input('L1');

    $segundoLado = $request->input('L2');

    $resultado = $primeiroLado * $segundoLado;

    return 'Os lados de um retângulo são ' . $primeiroLado . ' e ' . $segundoLado . ' sendo assim, a área do retângulo é ' . $resultado;
});

Route::get('valores', function (Request $request) {

    $preçoOriginal = $request->input('preçoInicial');

    $porcentagem = $request->input('porcentagem');

    $desconto = $porcentagem * $preçoOriginal / 100;

    $valorFinal = $preçoOriginal - $desconto;

    return 'O valor final do produto é de ' . $valorFinal;
});

Route::get('aumento/salarial', function (Request $request) {

    $salarioInicial = $request->input('salarioInicial');

    $porcentagem = $request->input('porcentagem');

    $aumento = $porcentagem * $salarioInicial / 100;

    $salarioFinal = $salarioInicial + $aumento;

    return 'o salário inicial é de ' . $salarioInicial . ' e o percentual de aumento é de ' . $porcentagem

        . '% sendo assim, o salário final é de ' . $salarioFinal;
});

Route::get('recompensa', function (Request $request) {

    $valorDaCompra = $request->input('valordacompra');

    $pontos = $valorDaCompra / 10;

    return 'o valor da compra foi de ' . $valorDaCompra . ' e a quantidade de pontos ganhos foi de '

        . $pontos;
});


Route::get('comissao', function (Request $request) {

    $vendas = $request->input('vendas');

    $comissao = $vendas * 5 / 100;



    return 'o total de vendas foi de R$' . $vendas . ' e a comissão tem o valor de R$' . $comissao;
});


Route::get('numero/dias', function (Request $request) {

    $numeroDeDias = $request->input('dias');

    $horas = $numeroDeDias * 24;

    $minutos = $horas * 60;

    $segundos = $minutos * 60;

    return 'o numero de dias é ' . $numeroDeDias . ' e a quantidade de horas desses dias é de ' . $horas . 'horas. Essa quantidade de dias tem '

        . $minutos . 'minutos. Essa quantidade de dias também tem ' . $segundos . 'segundos.';
});



Route::get('receber/total', function (Request $request) {
    $preçoProduto = $request->input('preço');
    $quantidade = $request->input('quantidade');
    $total = $preçoProduto * $quantidade;
    return 'O preço do produto é de R$' . $preçoProduto . ' e a quantidade comprada foi de ' . $quantidade . ' vezes. Sendo assim, o toal da compra é de R$' . $total;
});


Route::get('exemplo/condicao', function (Request $request) {
    $idade = $request->input('idade');
    $mensagem = "";
    if ($idade >= 18) {
        $mensagem = "Maior de idade";
    } else {
        $mensagem = "Menor de idade";
    }
    return $mensagem;
});


Route::get('verifica/idade', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade < 18) {
        return "menor de idade";
    } else {
        return "maior de idade";
    }
});


Route::get('verificar/par', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "impar";
    }
});


Route::get('verificar/numero', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 10) {
        return "Este número é maior que 10";
    } else  if ($numero == 10) {
        return "Este número é igual a 10";
    } else {
        return "Este número é menor que 10";
    }
});


Route::get('temperatura', function (Request $request) {
    $temperatura = $request->input('temperatura');
    if ($temperatura >= 30) {
        return "A temperatura é de " . $temperatura . "°C. Está quente!";
    } else {
        return "A temperatura é de " . $temperatura . "°C. Não está quente.";
    }
});



Route::get('verificar/numero', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return "o número é positivo";
    } else if ($numero == 0) {
        return "O número é 0 ";
    } else {
        return "O número é negativo";
    }
});


Route::get('numeros', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    if ($primeiroNumero > $segundoNumero) {
        return "O maior número é " . $primeiroNumero;
    } else {
        return "O maior número é " . $segundoNumero;
    }
});

Route::get('numero/divisivel', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 3 == 0) {
        return "O número é divisível";
    } else {
        return "O número não é divisível";
    }
});


Route::get('exercicio1', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 10) {
        return "Este número é maior que 10";
    } else  if ($numero == 10) {
        return "Este número é igual a 10";
    } else {
        return "Este número é menor que 10";
    }
});


Route::get('exercicio2', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return "o número é positivo";
    } else if ($numero == 0) {
        return "O número é 0 ";
    } else {
        return "O número é negativo";
    }
});

Route::get('exercicio3', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero >= 18) {
        return "Você é maior de idade";
    } else {
        return "Você é menor de idade";
    }
});


Route::get('exercicio4', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "impar";
    }
});


Route::get('exercicio5', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    if ($primeiroNumero > $segundoNumero) {
        return "O maior número é " . $primeiroNumero;
    } else {
        return "O maior número é " . $segundoNumero;
    }
});


Route::get('exercicio6', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 9 == 0) {
        return "O número é divisível";
    } else {
        return "O número não é divisível";
    }
});


Route::get('exercicio7', function (Request $request) {
    $temperatura = $request->input('temperatura');
    if ($temperatura >= 30) {
        return "A temperatura é de " . $temperatura . "°C. Está quente!";
    } else {
        return "A temperatura é de " . $temperatura . "°C. Não está quente.";
    }
});

Route::get('exercicio8', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 7 == 0) {
        return "O número é múltiplo de 7";
    } else {
        return "O número não é múltiplo de 7";
    }
});

Route::get('exercicio9', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade <= 12) {
        return "Você é uma criança";
    } else {
        return "Você não é uma criança";
    }
});

Route::get('exercicio10', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        if ($numero % 2 != 0) {
            return "O número é positivo e ímpar";
        } else {
            return "O número não é positivo nem ímpar";
        }
    }
});


Route::get('exercicio11', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 100) {
        return "O número é maior que 100";
    } else if ($numero == 100) {
        return "O número é igual a 100";
    } else {
        return "O número é menor que 100";
    }
});


Route::get('exercicio12', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 6 == 0) {
        return "O número é divisivel";
    } else {
        return "O número não é divisível";
    }
});

Route::get('exercicio13', function (Request $request) {
    $nome = $request->input('nome');
    if ($nome == "Alice") {
        return "Olá Alice!";
    }
});

Route::get('exercicio14', function (Request $request) {
    $idade = $request->input('idade');
    $carteira = $request->input('carteira');
    if ($idade >= 18) {
        if ($carteira == "Sim") {
            return "Você pode dirigir";
        } else {
            return "Você não pode dirigir";
        }
    }
});

Route::get('exercicio16, function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    if ($primeiroNumero < $segundoNumero) {
        return " O primeiro número é menor ";
    } else if ($primeiroNumero == $segundoNumero) {
        return "Os numeros são iguais";
    } else {
        return "O segundo número é menor";
    }
});


Route::get('exercicio17', function (Request $request) {
    $numero = $request->input('numero');
    $nome = $request->input('nome');
    if ($numero >= 18) {
        return 'Você é maior de idade, [' . $nome . ']';
    } else {
        return 'Você é menor de idade, [' . $nome . ']';
    }
});

Route::get('exercicio18', function (Request $request) {
    $primeiroNumero = $request->input('numero1');
    $segundoNumero = $request->input('numero2');
    if ($primeiroNumero == 0) {
        return "Não é possível efetuar a divisão pois o primeiro número é zero";
    } else if ($segundoNumero == 0) {
        return "Não é possível efetuar a divisão pois o segundo número é zero";
    } else {
        $divisao = $primeiroNumero / $segundoNumero;
        return $primeiroNumero . '/' . $segundoNumero . '=' . $divisao;
    }
});


Route::get('exercicio19', function(Request $request){
    $primeiroNumero = $request->input('numero1');
    $segundoNumero = $request->input('numero2');
    $resultado = $primeiroNumero * $segundoNumero;
    if($resultado > 100){
        return "O resultado é maior que 100";
    } else {
        return "O resultado é menor que 100";
    }
});


Route::get('exercicio20', function(Request $request){
    $primeiroNumero = $request->input('numero1');
    $segundoNumero = $request->input('numero2');
    $soma = $primeiroNumero + $segundoNumero;
    if($soma % 2 == 0){
        $resultado = $primeiroNumero * $segundoNumero;
        return "A soma é par, então devo multiplicar, dando o resultado " . $resultado;
    } else if($soma % 2 != 0){
        $resultado2 = $primeiroNumero / $segundoNumero;
        return "A soma é ímpar, então dividir, dando o resultado  " . $resultado2;
    }
});

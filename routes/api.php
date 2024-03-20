<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('nome/usuario', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->inpuit('idade');
    return "Meu nome é " . $nome . ", tenho" . $idade . " anos de idade";
});

Route::get('nome/cidade', function (Request $request) {
    $nome = $request->input('nome');
    $ano = $request->input('ano');
    $cidade = $request->input('cidade');
    return "Meu nome é " . $nome . ", nasci no ano de " . $ano . " na cidade de " . $cidade;
});

Route::get('somar', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero + $segundoNumero;
    return 'O resultado da soma dos numeros é: ' .
        $primeiroNumero . ' + ' . $segundoNumero . ' = ' . $resultado;
});

Route::get('subtrair', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $terceiroNumero = $request->input('terceiroNumero');
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return 'O resultado da subtração dos numeros é: ';
    $primeiroNumero . ' - ' . $segundoNumero . ' - ' . $terceiroNumero . ' = ' . $resultado;
});

Route::get('dividir', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero / $segundoNumero;
    return 'O resultado da divisão é: ' .
        $primeiroNumero . ' / ' . $segundoNumero . ' = ' . $resultado;
});

Route::get('multiplicacao', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero * $segundoNumero;
    return 'O resultado da multiplicacao é: ' .
        $primeiroNumero . ' x ' . $segundoNumero . ' = ' . $resultado;
});

Route::get('media', function (Request $request) {
    $primeiroNota = $request->input('primeiroNota');
    $segundoNota = $request->input('segundaNota');
    $terceiroNota = $request->input('terceiraNota');
    $quartoNota = $request->input('quartaNota');
    $quintoNota = $request->input('quintaNota');
    $resultado = $primeiroNota + $segundoNota + $terceiroNota + $quartoNota + $quintoNota;
    return 'O resultado da media é: ' .
        $primeiroNota . ' + ' . $segundoNota . ' + ' . $terceiroNota . ' + ' . $quartoNota . ' + ' .  $quintoNota  . ' = ' . $resultado / 5;
});

Route::get('divisao', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $segundoNumero / $primeiroNumero;
    return 'O resultado da divisão é: ' .
        $segundoNumero . ' / ' . $primeiroNumero . ' = ' . $resultado;
});

Route::get('dobro', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $resultado = $primeiroNumero * 2;
    return 'O dobro é igual a ' .
        $resultado;
});

Route::get('area', function (Request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base . $altura;
    return $resultado = $base * $altura;
});

Route::get('desconto', function (Request $request) {
    $compra = $request->input('compra');
    $desconto = $request->input('desconto');
    $porcentagem = $compra / 100;
    $resultado = $compra - ($desconto * $porcentagem);
    return $resultado;
});

Route::get('aumento', function (Request $request) {
    $salario = $request->input('salario');
    $aumento = $request->input('aumento');
    $porcentagem = $aumento / 100 * $salario;
    $resultado = $salario + $porcentagem;
    return 'O salario anterior e de ' . $salario . ', o valor de aumento e de ' .
        $porcentagem . ', e o salario atual e de ' . $resultado;
});

Route::get('ponto', function (Request $request) {
    $valor = $request->input('valor');
    $resultado = $valor / 10;
    return $resultado;
});

Route::get('comissao', function (Request $request) {
    $valorvendas = $request->input('valor');
    $comissao = $request->input('comissao');
    $resultado = $valorvendas / $comissao;
    return $resultado;
});

Route::get('dias', function (Request $request) {
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    $resultado = ' Serao ' . $horas . ' horas, ' . $minutos . ' minutos e ' . $segundos . ' segundos ';
    return $resultado;
});

Route::get('Preco/Quantidade', function (Request $request) {
    $precoP = $request->input('precoP');
    $quantP = $request->input('quantP');
    $resultado = $precoP * $quantP;
    return $resultado;
});

Route::get('verifica/idade', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade >= 18) {
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});

Route::get('par/impar', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0){
        return "par";
    } else {
        return "ímpar";
    }
});

Route::get('maior/menor', function (Request $request) {
$numero = $request->input('numero');
if ($numero >= 10){
 return "o numero é maior";
} else {
    return "o numero é menor";
}
});

Route::get('temperatura', function (Request $request) {
$temperatura = $request->input('temperatura');
if ($temperatura >= 30){
    return "Está quente!";
} else {
    return "Não está quente"; 
}
});

Route::get('positivo/negativo', function (Request $request) {
$numero = $request->input('numero');
if ($numero > 0){
    return "este número é positivo";
} else if($numero < 0){
    return "este número é negatvio";
} else {
    return "este número é zero";
}
});

Route::get('maior/numero', function (Request $request) {
$numero1 = $request->input('numero1');
$numero2 = $request->input('numero2');
if ($numero1 > $numero2){
return "o número maior é " . $numero1;
} else {
    return "o numero maior é " . $numero2;
}
});  

Route::get('divisao/tres', function (Request $request) {
    $numero = $request->input('numero');
    $resto = ($numero %3);
    if ($resto == 0){
return "o número é divisível";
    } else {
        return "o numero não é divisível ";
    }
});  
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('nome/usuario', function (Request $request) {
    $nome = 'Malu';
    return $nome;
});

Route::get('nome/idade', function (Request $request) {
    $nome = 'Malu';
    $idade = '16';
    return "Meu nome é " . $nome . ", tenho" . $idade . " anos de idade";
});

Route::get('nome/cidade', function (Request $request) {
    $nome = "Malu";
    $ano = '2007';
    $cidade = "Presidente Epitacio.";
    return "Meu nome é " . $nome . ", nasci no ano de " . $ano . " na cidade de " . $cidade;
});

Route::get('somar', function (Request $request) {
    $primeiroNumero = 10;
    $segundoNumero = 20;
    $resultado = $primeiroNumero * $segundoNumero;
    return 'O resultado da soma dos numeros é: ' .
        $primeiroNumero . ' + ' . $segundoNumero . ' = ' . $resultado;
});

Route::get('subtrair', function (Request $request) {
    $primeiroNumero = 60;
    $segundoNumero = 20;
    $terceiroNumero = 40;
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return 'O resultado da subtração dos numeros é: ';
    $primeiroNumero . ' - ' . $segundoNumero . ' - ' . $terceiroNumero . ' = ' . $resultado;
});

Route::get('dividir', function (Request $request) {
    $primeiroNumero = 60;
    $segundoNumero = 20;
    $resultado = $primeiroNumero / $segundoNumero;
    return 'O resultado da divisão é: ' .
        $primeiroNumero . ' / ' . $segundoNumero . ' = ' . $resultado;
});

Route::get('multiplicacao', function (Request $request) {
    $primeiroNumero = 60;
    $segundoNumero = 20;
    $resultado = $primeiroNumero * $segundoNumero;
    return 'O resultado da multiplicacao é: ' .
        $primeiroNumero . ' x ' . $segundoNumero . ' = ' . $resultado;
});

Route::get('media', function (Request $request) {
    $primeiroNota = 6;
    $segundoNota = 8;
    $terceiroNota = 5;
    $quartoNota = 9;
    $quintoNota = 6;
    $resultado = $primeiroNota + $segundoNota + $terceiroNota + $quartoNota + $quintoNota;
    return 'O resultado da media é: ' .
        $primeiroNota . ' + ' . $segundoNota . ' + ' . $terceiroNota . ' + ' . $quartoNota . ' + ' .  $quintoNota  . ' = ' . $resultado / 5;
});

Route::get('divisao', function (Request $request) {
    $primeiroNumero = 30;
    $segundoNumero = 20;
    $resultado = $segundoNumero / $primeiroNumero;
    return 'O resultado da divisão é: ' .
        $segundoNumero . ' / ' . $primeiroNumero . ' = ' . $resultado;
});

Route::get('dobro', function (Request $request) {
    $primeiroNumero = 30;
    $resultado = $primeiroNumero * 2;
    return 'O dobro de 30 é igual a ' .
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

Route::get('comissao', function (Request $request){
    $valorvendas = $request->input('valor');
    $comissao = $request->input('comissao');
    $resultado = $valorvendas / $comissao;
    return $resultado;
});

Route::get('dias', function (Request $request){
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    $resultado = ' Serao ' . $horas . ' horas, ' . $minutos . ' minutos e ' . $segundos . ' segundos ';
    return $resultado;
    });
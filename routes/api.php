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
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

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
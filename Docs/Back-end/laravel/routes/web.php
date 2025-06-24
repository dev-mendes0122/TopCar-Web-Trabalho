<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Rota de teste para verificar se o servidor responde
Route::get('/teste', function () {
    return 'Teste OK!';
});

// Exibe o formulário
Route::get('/anuncie', function () {
    return view('anuncie');
});

// Processa o formulário
Route::post('/anuncie', function (Request $request) {
    $validated = $request->validate([
        'titulo' => 'required|string|max:255',
        'descricao' => 'required|string|max:1000',
    ]);

    return response()->json([
        'mensagem' => 'Anúncio recebido com sucesso!',
        'dados' => $validated
    ]);
});

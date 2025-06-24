<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    public function store(Request $request)
    {
        // Validação simples dos campos
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
        ]);

        // Exibe os dados recebidos só pra teste
        return response()->json([
            'mensagem' => 'Anúncio recebido com sucesso!',
            'dados' => $validated
        ]);
    }
}

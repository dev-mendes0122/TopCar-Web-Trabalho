<?php

namespace App\Http\Controllers;

use App\Models\Carro;  
use Illuminate\Http\Request; 
use Illuminate\Validation\ValidationException;  

class CarroController extends Controller
{
    /**
     *  
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
          
        $carros = Carro::all();
        return response()->json($carros);
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request   
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
             
            $validatedData = $request->validate([
                'marca' => 'required|string|max:255',
                'modelo' => 'required|string|max:255',
                'ano' => 'required|integer|min:1900|max:' . (date('Y') + 1),  
                'preco' => 'required|numeric|min:0',
                'cor' => 'nullable|string|max:255',
                'descricao' => 'nullable|string',
                'quilometragem' => 'required|string|max:255',
                'tipo_combustivel' => 'nullable|string|max:255',
                'cambio' => 'nullable|string|max:255',
                'imagem_url' => 'nullable|url|max:2048',  
                'disponivel' => 'boolean',
            ]);

             
            $carro = Carro::create($validatedData);

             
            return response()->json($carro, 201);

        } catch (ValidationException $e) {
             
            return response()->json([
                'message' => 'Os dados fornecidos são inválidos.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            
            return response()->json([
                'message' => 'Ocorreu um erro ao criar o carro.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     *  
     *
     * @param  \App\Models\Carro   
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Carro $carro)
    {
         
        return response()->json($carro);
    }

    /**
     *  
     *
     * @param  \Illuminate\Http\Request   
     * @param  \App\Models\Carro   
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Carro $carro)
    {
        try {
             
            $validatedData = $request->validate([
                'marca' => 'sometimes|string|max:255',  
                'modelo' => 'sometimes|string|max:255',
                'ano' => 'sometimes|integer|min:1900|max:' . (date('Y') + 1),
                'preco' => 'sometimes|numeric|min:0',
                'cor' => 'nullable|string|max:255',
                'descricao' => 'nullable|string',
                'quilometragem' => 'sometimes|string|max:255',
                'tipo_combustivel' => 'nullable|string|max:255',
                'cambio' => 'nullable|string|max:255',
                'imagem_url' => 'nullable|url|max:2048',
                'disponivel' => 'boolean',
            ]);

             
            $carro->update($validatedData);

             
            return response()->json($carro);

        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Os dados fornecidos são inválidos.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Ocorreu um erro ao atualizar o carro.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     *  
     *
     * @param  \App\Models\Carro   
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Carro $carro)
    {
        try {
            
            $carro->delete();

             
            return response()->json(null, 204);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Ocorreu um erro ao deletar o carro.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}


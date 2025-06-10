<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    /**
     *  
     *
     * @var string
     */
    protected $table = 'carros';  

    /**
     *  
     *
     * @var array<int,  
     */
    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'preco',
        'cor',
        'descricao',
        'quilometragem',
        'tipo_combustivel',
        'cambio',
        'imagem_url',
        'disponivel',
    ];

    /**
     *  
     *
     * @var array<string,  
     */
    protected $casts = [
        'preco' => 'decimal:2',  
        'disponivel' => 'boolean',  
    ];
}
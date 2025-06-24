<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $table = 'anuncios'; // Nome da tabela no banco

    protected $fillable = [
        'titulo',
        'descricao',
    ];
}

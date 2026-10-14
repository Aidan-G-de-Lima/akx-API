<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transacao extends Model
{
    
    protected $fillable = [
        'descricao',
        'valor',
        'tipo',
        'categoria',
        'data',
    ];
}

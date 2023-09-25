<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApostasModel extends Model
{
    protected $table = 'apostas';
    protected $fillable = [
        'user_id',
        'numeros_sorteados',
        'soma',
        'impares',
        'pares',
        'primos'
    ];
}
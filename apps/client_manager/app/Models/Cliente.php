<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'razao_social',
        'cnpj',
        'email',
    ];
}

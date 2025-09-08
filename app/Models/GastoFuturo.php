<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GastoFuturo extends Model
{
    use HasFactory;

    protected $fillable = [
        'carteira_id',
        'categoria_id',
        'descricao',
        'valor_previsto',
        'data_prevista',
        'status',
    ];

    public function carteira()
    {
        return $this->belongsTo(Carteira::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'carteira_id',
        'categoria_id',
        'descricao',
        'valor',
        'data',
        'tipo',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function carteira()
    {
        return $this->belongsTo(Carteira::class);
    }

  
    public function user()
    {
        return $this->carteira->user();
    }
}

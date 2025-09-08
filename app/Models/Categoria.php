<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'usuario_id', 
    ];

    
    public function transacoes()
    {
        return $this->hasMany(Transacao::class);
    }

    
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
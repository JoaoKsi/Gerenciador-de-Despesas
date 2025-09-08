<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'saldo_inicial',
        'tipo',
        'usuario_id',
    ];

   
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

  
    public function transacoes()
    {
        return $this->hasMany(Transacao::class);
    }
}
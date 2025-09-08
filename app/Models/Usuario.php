<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   public function carteiras()
{
    return $this->hasMany(Carteira::class, 'usuario_id');
}

public function categorias()
{
    return $this->hasMany(Categoria::class, 'usuario_id');
}

}

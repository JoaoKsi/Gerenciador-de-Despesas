<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransacaoRequest extends FormRequest
{
    public function authorize() { return true; }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0',
            'data' => 'required|date',
            'descricao' => 'nullable|string',
            'categoria_id' => 'required|exists:categorias,id',
        ];
    }
}

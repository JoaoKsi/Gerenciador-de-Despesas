<?php 
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
    public function authorize() { return true; }

    public function rules()
    {
        return [
            'nome' => 'required|string|max:255|unique:categorias,nome,' . ($this->categoria->id ?? 'null'),
            'descricao' => 'nullable|string',
        ];
    }
}
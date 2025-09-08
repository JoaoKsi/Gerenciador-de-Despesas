<?php

namespace App\Http\Controllers;

use App\Models\Carteira;
use Illuminate\Http\Request;

class CarteiraController extends Controller
{
    public function index()
    {
        return Carteira::where('usuario_id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'saldo_inicial' => 'required|numeric',
            'tipo' => 'required|string|max:50',
        ]);

        $data['usuario_id'] = auth()->id();

        return Carteira::create($data);
    }

    public function show(Carteira $carteira)
    {
        $this->authorizeUser($carteira);
        return $carteira;
    }

    public function update(Request $request, Carteira $carteira)
    {
        $this->authorizeUser($carteira);

        $data = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'saldo_inicial' => 'sometimes|required|numeric',
            'tipo' => 'sometimes|required|string|max:50',
        ]);

        $carteira->update($data);
        return $carteira;
    }

    public function destroy(Carteira $carteira)
    {
        $this->authorizeUser($carteira);
        $carteira->delete();
        return response()->noContent();
    }

    private function authorizeUser(Carteira $carteira)
    {
        if ($carteira->usuario_id !== auth()->id()) {
            abort(403, 'Acesso negado');
        }
    }
}
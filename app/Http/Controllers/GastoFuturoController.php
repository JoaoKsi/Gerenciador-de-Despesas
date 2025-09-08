<?php

namespace App\Http\Controllers;

use App\Models\GastoFuturo;
use Illuminate\Http\Request;

class GastoFuturoController extends Controller
{
    public function index()
    {
       
        return GastoFuturo::whereHas('carteira', function ($q) {
            $q->where('usuario_id', auth()->id());
        })->with(['carteira', 'categoria'])->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'carteira_id' => 'required|exists:carteiras,id',
            'categoria_id' => 'required|exists:categorias,id',
            'descricao' => 'required|string|max:255',
            'valor_previsto' => 'required|numeric',
            'data_prevista' => 'required|date',
            'status' => 'required|in:pendente,pago',
        ]);

        
        $carteira = \App\Models\Carteira::findOrFail($data['carteira_id']);
        if ($carteira->usuario_id !== auth()->id()) {
            abort(403, 'Acesso negado');
        }

        $gasto = GastoFuturo::create($data);
        return $gasto->load(['carteira', 'categoria']);
    }

    public function show(GastoFuturo $gastoFuturo)
    {
        $this->authorizeUser($gastoFuturo);
        return $gastoFuturo->load(['carteira', 'categoria']);
    }

    public function update(Request $request, GastoFuturo $gastoFuturo)
    {
        $this->authorizeUser($gastoFuturo);

        $data = $request->validate([
            'descricao' => 'sometimes|required|string|max:255',
            'valor_previsto' => 'sometimes|required|numeric',
            'data_prevista' => 'sometimes|required|date',
            'status' => 'sometimes|required|in:pendente,pago',
            'categoria_id' => 'sometimes|required|exists:categorias,id',
            'carteira_id' => 'sometimes|required|exists:carteiras,id',
        ]);

       
        if (isset($data['carteira_id'])) {
            $carteira = \App\Models\Carteira::findOrFail($data['carteira_id']);
            if ($carteira->usuario_id !== auth()->id()) {
                abort(403, 'Acesso negado');
            }
        }

        $gastoFuturo->update($data);
        return $gastoFuturo->load(['carteira', 'categoria']);
    }

    public function destroy(GastoFuturo $gastoFuturo)
    {
        $this->authorizeUser($gastoFuturo);
        $gastoFuturo->delete();
        return response()->noContent();
    }

    private function authorizeUser(GastoFuturo $gastoFuturo)
    {
        if ($gastoFuturo->carteira->usuario_id !== auth()->id()) {
            abort(403, 'Acesso negado');
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Transacao;
use App\Http\Requests\TransacaoRequest;

class TransacaoController extends Controller
{
    public function index()
    {
        return Transacao::with('categoria')->where('user_id', auth()->id())->get();
    }

    public function store(TransacaoRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        $transacao = Transacao::create($data);
        return $transacao->load('categoria');
    }

    public function show(Transacao $transacao)
    {
        $this->authorizeUser($transacao);
        return $transacao->load('categoria');
    }

    public function update(TransacaoRequest $request, Transacao $transacao)
    {
        $this->authorizeUser($transacao);
        $transacao->update($request->validated());
        return $transacao->load('categoria');
    }

    public function destroy(Transacao $transacao)
    {
        $this->authorizeUser($transacao);
        $transacao->delete();
        return response()->noContent();
    }

    private function authorizeUser(Transacao $transacao)
    {
        if ($transacao->user_id !== auth()->id()) {
            abort(403, 'Acesso negado');
        }
    }
}

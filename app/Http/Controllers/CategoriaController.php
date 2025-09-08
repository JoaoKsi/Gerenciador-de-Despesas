<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function store(CategoriaRequest $request)
    {
        return Categoria::create($request->validated());
    }

    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    public function update(CategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->validated());
        return $categoria;
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->noContent();
    }
}
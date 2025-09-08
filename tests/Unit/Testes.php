<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Transacao;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoriaTest extends TestCase
{
    use RefreshDatabase;

    public function test_criacao_de_categoria()
    {
        $user = User::factory()->create();

        $categoria = Categoria::create([
            'nome' => 'Alimentação',
            'descricao' => 'Despesas com comida',
            'usuario_id' => $user->id,
        ]);

        $this->assertInstanceOf(Categoria::class, $categoria);
        $this->assertEquals('Alimentação', $categoria->nome);
        $this->assertEquals($user->id, $categoria->usuario_id);
    }

    public function test_atualizacao_de_categoria()
    {
        $user = User::factory()->create();

        $categoria = Categoria::create([
            'nome' => 'Transporte',
            'descricao' => 'Ônibus e gasolina',
            'usuario_id' => $user->id,
        ]);

        $categoria->update([
            'nome' => 'Transporte Atualizado',
            'descricao' => 'Só gasolina',
        ]);

        $this->assertEquals('Transporte Atualizado', $categoria->nome);
        $this->assertEquals('Só gasolina', $categoria->descricao);
    }

    public function test_delecao_de_categoria()
    {
        $user = User::factory()->create();

        $categoria = Categoria::create([
            'nome' => 'Lazer',
            'descricao' => 'Cinema e jogos',
            'usuario_id' => $user->id,
        ]);

        $id = $categoria->id;
        $categoria->delete();

        $this->assertDatabaseMissing('categorias', ['id' => $id]);
    }

    public function test_relacionamento_com_usuario()
    {
        $user = User::factory()->create();

        $categoria = Categoria::create([
            'nome' => 'Educação',
            'descricao' => null,
            'usuario_id' => $user->id,
        ]);

        $this->assertEquals($user->id, $categoria->usuario->id);
    }

    public function test_relacionamento_com_transacoes()
    {
        $user = User::factory()->create();
        $categoria = Categoria::create([
            'nome' => 'Alimentação',
            'descricao' => 'Comida',
            'usuario_id' => $user->id,
        ]);

        $transacao = Transacao::factory()->create([
            'categoria_id' => $categoria->id,
            'descricao' => 'Mercado',
            'valor' => 200,
            'tipo' => 'saída',
        ]);

        $this->assertTrue($categoria->transacoes->contains($transacao));
    }
}
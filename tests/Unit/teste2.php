<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Carteira;
use App\Models\Categoria;
use App\Models\Transacao;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TransacaoTest extends TestCase
{
    use RefreshDatabase;

    public function test_criacao_de_transacao()
    {
        $user = User::factory()->create();

        $carteira = Carteira::factory()->create(['usuario_id' => $user->id]);
        $categoria = Categoria::factory()->create(['usuario_id' => $user->id]);

        $transacao = Transacao::create([
            'carteira_id' => $carteira->id,
            'categoria_id' => $categoria->id,
            'descricao' => 'Salário',
            'valor' => 2500.00,
            'data' => now()->toDateString(),
            'tipo' => 'entrada',
        ]);

        $this->assertInstanceOf(Transacao::class, $transacao);
        $this->assertEquals('Salário', $transacao->descricao);
        $this->assertEquals(2500.00, $transacao->valor);
        $this->assertEquals('entrada', $transacao->tipo);
        $this->assertEquals($carteira->id, $transacao->carteira->id);
        $this->assertEquals($categoria->id, $transacao->categoria->id);
    }

    public function test_atualizacao_de_transacao()
    {
        $user = User::factory()->create();
        $carteira = Carteira::factory()->create(['usuario_id' => $user->id]);
        $categoria = Categoria::factory()->create(['usuario_id' => $user->id]);

        $transacao = Transacao::create([
            'carteira_id' => $carteira->id,
            'categoria_id' => $categoria->id,
            'descricao' => 'Aluguel',
            'valor' => 1200.00,
            'data' => now()->toDateString(),
            'tipo' => 'saída',
        ]);

        $transacao->update([
            'descricao' => 'Aluguel Atualizado',
            'valor' => 1300.00,
        ]);

        $this->assertEquals('Aluguel Atualizado', $transacao->descricao);
        $this->assertEquals(1300.00, $transacao->valor);
    }

    public function test_delecao_de_transacao()
    {
        $user = User::factory()->create();
        $carteira = Carteira::factory()->create(['usuario_id' => $user->id]);
        $categoria = Categoria::factory()->create(['usuario_id' => $user->id]);

        $transacao = Transacao::create([
            'carteira_id' => $carteira->id,
            'categoria_id' => $categoria->id,
            'descricao' => 'Compras',
            'valor' => 300.00,
            'data' => now()->toDateString(),
            'tipo' => 'saída',
        ]);

        $id = $transacao->id;
        $transacao->delete();

        $this->assertDatabaseMissing('transacoes', ['id' => $id]);
    }

    public function test_relacionamento_com_carteira_e_categoria()
    {
        $user = User::factory()->create();
        $carteira = Carteira::factory()->create(['usuario_id' => $user->id]);
        $categoria = Categoria::factory()->create(['usuario_id' => $user->id]);

        $transacao = Transacao::create([
            'carteira_id' => $carteira->id,
            'categoria_id' => $categoria->id,
            'descricao' => 'Mercado',
            'valor' => 200.00,
            'data' => now()->toDateString(),
            'tipo' => 'saída',
        ]);

        $this->assertEquals($carteira->id, $transacao->carteira->id);
        $this->assertEquals($categoria->id, $transacao->categoria->id);
    }
}

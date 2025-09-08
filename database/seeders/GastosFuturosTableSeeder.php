<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GastosFuturosTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gastos_futuros')->insert([
            [
                'carteira_id' => 1,
                'categoria_id' => 3, // Moradia
                'valor_previsto' => 890.00,
                'descricao' => 'Aluguel do próximo mês',
                'data_prevista' => '2025-09-08',
                'status' => 'pendente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 2,
                'categoria_id' => 2, // Transporte
                'valor_previsto' => 450.00,
                'descricao' => 'Revisão do carro',
                'data_prevista' => '2025-09-15',
                'status' => 'pendente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 3,
                'categoria_id' => 4, // Lazer
                'valor_previsto' => 200.00,
                'descricao' => 'Ingressos para show',
                'data_prevista' => '2025-09-22',
                'status' => 'pendente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 4,
                'categoria_id' => 1, // Alimentação
                'valor_previsto' => 600.00,
                'descricao' => 'Compras do mercado mensal',
                'data_prevista' => '2025-09-02',
                'status' => 'pendente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 5,
                'categoria_id' => 7, // Viagem
                'valor_previsto' => 1200.00,
                'descricao' => 'Viagem para Florianópolis',
                'data_prevista' => '2025-10-05',
                'status' => 'pendente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 6,
                'categoria_id' => 6, // Investimento
                'valor_previsto' => 1000.00,
                'descricao' => 'Aplicação em Tesouro Direto',
                'data_prevista' => '2025-09-12',
                'status' => 'pendente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransacoesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transacoes')->insert([
            [
                'carteira_id' => 1,
                'categoria_id' => 1, // Ex: Alimentação
                'tipo' => 'saída',
                'valor' => 45.90,
                'descricao' => 'Almoço no restaurante',
                'data' => '2025-08-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 1,
                'categoria_id' => 5, // Ex: Salário
                'tipo' => 'entrada',
                'valor' => 3200.00,
                'descricao' => 'Salário mensal',
                'data' => '2025-08-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 2,
                'categoria_id' => 2, // Ex: Transporte
                'tipo' => 'saída',
                'valor' => 120.00,
                'descricao' => 'Abastecimento do carro',
                'data' => '2025-08-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 3,
                'categoria_id' => 4, // Ex: Lazer
                'tipo' => 'saída',
                'valor' => 59.90,
                'descricao' => 'Assinatura Netflix',
                'data' => '2025-08-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 4,
                'categoria_id' => 6, // Ex: Investimento
                'tipo' => 'entrada',
                'valor' => 1500.00,
                'descricao' => 'Aplicação em CDB',
                'data' => '2025-08-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 5,
                'categoria_id' => 3, // Ex: Moradia
                'tipo' => 'saída',
                'valor' => 890.00,
                'descricao' => 'Pagamento do aluguel',
                'data' => '2025-08-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 6,
                'categoria_id' => 7, // Ex: Viagem
                'tipo' => 'saída',
                'valor' => 350.00,
                'descricao' => 'Hotel em Curitiba',
                'data' => '2025-07-29',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 7,
                'categoria_id' => 1, // Ex: Alimentação
                'tipo' => 'saída',
                'valor' => 75.00,
                'descricao' => 'Compras no mercado',
                'data' => '2025-08-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 8,
                'categoria_id' => 5, // Ex: Salário
                'tipo' => 'entrada',
                'valor' => 2100.00,
                'descricao' => 'Freelance de design',
                'data' => '2025-08-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'carteira_id' => 9,
                'categoria_id' => 4, // Ex: Lazer
                'tipo' => 'saída',
                'valor' => 120.00,
                'descricao' => 'Cinema e jantar',
                'data' => '2025-08-14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
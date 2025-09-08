<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarteirasTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('carteiras')->insert([
            [
                'nome' => 'Conta Corrente Itaú',
                'saldo_inicial' => 2500.00,
                'tipo' => 'corrente',
                'usuario_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Poupança Caixa',
                'saldo_inicial' => 1200.50,
                'tipo' => 'poupança',
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carteira Digital PicPay',
                'saldo_inicial' => 300.00,
                'tipo' => 'digital',
                'usuario_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Investimentos Nubank',
                'saldo_inicial' => 5000.00,
                'tipo' => 'investimento',
                'usuario_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Conta Corrente Bradesco',
                'saldo_inicial' => 1800.75,
                'tipo' => 'corrente',
                'usuario_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carteira de Viagem',
                'saldo_inicial' => 600.00,
                'tipo' => 'espécie',
                'usuario_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Conta Corrente Santander',
                'saldo_inicial' => 3200.00,
                'tipo' => 'corrente',
                'usuario_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Poupança Família',
                'saldo_inicial' => 950.00,
                'tipo' => 'poupança',
                'usuario_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carteira Mercado Pago',
                'saldo_inicial' => 420.00,
                'tipo' => 'digital',
                'usuario_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Conta Corrente Banco do Brasil',
                'saldo_inicial' => 2700.00,
                'tipo' => 'corrente',
                'usuario_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
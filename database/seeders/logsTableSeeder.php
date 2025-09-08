<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('logs')->insert([
            [
                'usuario_id' => 1,
                'acao' => 'Login no sistema',
                'detalhes' => 'Usuário entrou no painel principal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 2,
                'acao' => 'Cadastro de transação',
                'detalhes' => 'Adicionou uma transação de -250.00 em Alimentação',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 3,
                'acao' => 'Edição de carteira',
                'detalhes' => 'Alterou saldo inicial da carteira "Nubank" para 1500.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 1,
                'acao' => 'Cadastro de gasto futuro',
                'detalhes' => 'Planejou uma viagem para Florianópolis em 05/10/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 4,
                'acao' => 'Exclusão de categoria',
                'detalhes' => 'Removeu categoria "Outros"',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 5,
                'acao' => 'Logout',
                'detalhes' => 'Usuário encerrou a sessão',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
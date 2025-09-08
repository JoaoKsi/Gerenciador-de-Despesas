<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nome' => 'Alimentação',
                'descricao' => 'Gastos com mercado, padaria, restaurantes e delivery',
                'usuario_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Transporte',
                'descricao' => 'Combustível, passagens de ônibus, Uber, manutenção de carro ou moto',
                'usuario_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Moradia',
                'descricao' => 'Aluguel, financiamento, luz, água, internet, condomínio',
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Lazer',
                'descricao' => 'Cinema, shows, passeios, viagens e hobbies',
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Saúde',
                'descricao' => 'Planos de saúde, consultas médicas, farmácia',
                'usuario_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Educação',
                'descricao' => 'Mensalidade escolar, faculdade, cursos, livros',
                'usuario_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Investimentos',
                'descricao' => 'Aportes em renda fixa, variável e criptomoedas',
                'usuario_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Compras',
                'descricao' => 'Roupas, eletrônicos, móveis, itens pessoais',
                'usuario_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Pets',
                'descricao' => 'Ração, pet shop, veterinário, brinquedos',
                'usuario_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Outros',
                'descricao' => 'Despesas diversas que não se encaixam nas demais categorias',
                'usuario_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
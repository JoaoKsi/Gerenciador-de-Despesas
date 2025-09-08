<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nome' => 'João Silva',
                'email' => 'joaosilva@gmail.com',
                'password' => Hash::make('joao123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Souza',
                'email' => 'mariinha_souza@hotmail.com',
                'password' => Hash::make('maria456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carlos Oliveira',
                'email' => 'carlos.oliveira22@gmail.com',
                'password' => Hash::make('carlos789'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Ana Costa',
                'email' => 'ana_costa88@hotmail.com',
                'password' => Hash::make('ana2024'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Fernanda Lima',
                'email' => 'fernanda.lima99@gmail.com',
                'password' => Hash::make('fer_lima'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Rafael Santos',
                'email' => 'rafa_santos07@hotmail.com',
                'password' => Hash::make('rafa@123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Juliana Pereira',
                'email' => 'julianapereira@gmail.com',
                'password' => Hash::make('juliana321'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Bruno Almeida',
                'email' => 'brunoalmeida23@hotmail.com',
                'password' => Hash::make('bruno_pass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Camila Rodrigues',
                'email' => 'camila.rodrigues01@gmail.com',
                'password' => Hash::make('camila#2025'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Pedro Martins',
                'email' => 'pedro_martins@hotmail.com',
                'password' => Hash::make('pedro654'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
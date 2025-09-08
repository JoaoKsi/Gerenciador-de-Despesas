<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuariosTableSeeder::class,
            CategoriasTableSeeder::class,
            CarteirasTableSeeder::class,
            TransacoesTableSeeder::class,
            GastosFuturosTableSeeder::class,
            LogsTableSeeder::class,
        ]);
    }
}
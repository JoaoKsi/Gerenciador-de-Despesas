<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gastos_futuros', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('carteira_id'); // FK para carteiras
    $table->unsignedBigInteger('categoria_id'); // FK para categorias
    $table->string('descricao');
    $table->decimal('valor_previsto', 10, 2);
    $table->date('data_prevista');
    $table->enum('status', ['pendente', 'pago']);
    $table->timestamps();

    $table->foreign('carteira_id')->references('id')->on('carteiras')->onDelete('cascade');
    $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos_futuros');
    }
};

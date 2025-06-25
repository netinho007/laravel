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
    Schema::create('anuncio', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('descricao');
        $table->decimal('preco', 8, 2);
        $table->timestamp('data_publicacao')->nullable();

        $table->unsignedBigInteger('veiculo_id');

        $table->foreign('veiculo_id')->references('id')->on('veiculo')->onDelete('cascade');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncio');
    }
};

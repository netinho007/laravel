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
            $table->unsignedBigInteger('proprietario_id'); // campo de chave estrangeira
            $table->unsignedBigInteger('veiculo_id'); // campo de chave estrangeira
            $table->string('titulo');
            $table->string('descricao');
            $table->decimal('preco', 8, 2);
            $table->timestamp('data_publicacao')->nullable();
            $table->timestamps();

                        // constraint
        $table->foreign('proprietatio_id')->references('id')->on('proprietario');
        $table->foreign('veiculo_id')->references('id')->on('veiculo');
        $table->unique('veiculo_id'); // garante relacionamento um para um
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

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
        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('anuncio_id'); // campo de chave estrangeira
            $table->string('marca', 255);
            $table->string('modelo', 255);
            $table->string('ano', 255);
            $table->string('placa', 255);
            $table->string('cor', 255);

                    // constraint
        $table->foreign('anuncio_id')->references('id')->on('anuncio');
        $table->unique('anuncio_id'); // garante relacionamento um para um
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculo');
    }
};

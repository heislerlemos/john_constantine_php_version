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
        Schema::create('centros_de_formacaos', function (Blueprint $table) {
            $table->id();
            $table->longText('imglink');
            $table->string('nome');
            $table->longText('localizacao');
            $table->integer('vagas');
            $table->longText('imagemfau');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros_de_formacaos');
    }
};

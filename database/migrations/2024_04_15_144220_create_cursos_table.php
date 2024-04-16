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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('centros_de_formacaos_id')->constrained()->cascadeOnDelete();
            $table->integer('centro_de_formacao_id');
            $table->string('cadeiras');            
            $table->date('data');
            $table->longtext('horario');
            $table->integer('tempo_de_duracao');
            $table->integer('precario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};

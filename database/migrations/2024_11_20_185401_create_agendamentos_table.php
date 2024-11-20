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
            Schema::create('agendamentos', function (Blueprint $table) {
                $table->id();
                $table->string('nome');
                $table->string('email');
                $table->string('telefone');
                $table->date('data');
                $table->time('hora');
                $table->string('especie');
                $table->foreignId('id_services')->constrained('servicos');
                $table->timestamps();
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};

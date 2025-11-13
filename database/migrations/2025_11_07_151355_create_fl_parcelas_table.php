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
        Schema::create('fl_parcelas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_parcela')->nullable()->unique();
            $table->float('valor');
            $table->integer('num_parcela');
            $table->date('data_pagamento');
            $table->date('data_processamento');
            $table->date('data_hora_criacao');
            $table->string('bandeira');
            $table->string('num_cartao');
            $table->enum('forma_pagamento', ['credito', 'debito', 'boleto', 'pix']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fl_parcelas');
    }
};

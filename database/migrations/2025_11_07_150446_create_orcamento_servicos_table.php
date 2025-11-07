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
        Schema::create('orcamento_servicos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_orcamento_servico')->nullable()->unique();
            $table->float('qtd');
            $table->float('vl_unitario');
            $table->float('vl_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamento_servicos');
    }
};

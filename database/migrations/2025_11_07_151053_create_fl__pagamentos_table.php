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
        Schema::create('fl__pagamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pagamento')->nullable()->unique();
            $table->float('valor');
            $table->string('forma_pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fl__pagamentos');
    }
};

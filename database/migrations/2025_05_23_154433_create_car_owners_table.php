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
        Schema::create('car_owners', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->string('mark');
            $table->string('model');
            $table->string('type'); 
            $table->string('state');    
            $table->string('type_of_failure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_owners');
    }
};

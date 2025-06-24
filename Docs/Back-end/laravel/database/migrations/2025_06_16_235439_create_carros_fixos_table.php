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
        Schema::create('carros_fixos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');    // Deve existir essa coluna
            $table->integer('ano');
            $table->string('modelo');
            $table->decimal('valor', 10, 2);
            $table->string('cidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros_fixos');
    }
};

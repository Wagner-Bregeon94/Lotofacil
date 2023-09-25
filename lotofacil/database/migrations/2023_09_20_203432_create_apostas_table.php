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
        Schema::create('apostas', function (Blueprint $table) {
            $table->id();
            $table->index('user_id');
            $table->string('numeros_sorteados');
            $table->integer('soma');
            $table->integer('impares');
            $table->integer('pares');
            $table->integer('primos');
            $table->timestamps();

            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apostas');
    }
};

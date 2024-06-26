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
        Schema::create('cotacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('valor', 12, 6);
            $table->dateTime('dataHora');
            $table->string('descricao', 100);
            $table->timestamps();
            $table->foreignId('moeda_id');

            $table->unique(['moeda_id', 'dataHora','descricao']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotacaos');
    }
};

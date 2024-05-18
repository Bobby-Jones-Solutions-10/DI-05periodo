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
        Schema::create('cofres',function(Blueprint $table){
            $table->id();
            $table->foreignId('usuarios_id')->constrained()->onDelete('cascade');
            $table->float('totalGuardado',2);
            $table->float('maiorAporte',2);
            $table->float('meta',2);
            $table->float('rendimento',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cofres');
    }
};

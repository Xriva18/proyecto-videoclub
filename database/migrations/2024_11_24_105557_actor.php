<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('actor', function (Blueprint $table) {
            $table->id('id_actor');
            $table->foreignId('id_sex')->constrained('sexo', 'id_sex');
            $table->string('nombre_actor', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor');
    }
};

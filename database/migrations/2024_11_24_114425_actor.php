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
            $table->unsignedBigInteger('id_sex');
            $table->foreign('id_sex')->references('id_sex')->on('sexo')->onDelte('cascade');
            $table->string('nombre_actor', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('actor');
    }
};

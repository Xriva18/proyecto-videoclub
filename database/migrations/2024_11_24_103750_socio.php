<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('socio', function (Blueprint $table) {
            $table->id('id_socio');
            $table->char('nombre_socio', 10);
            $table->string('apellido_socio', 60);
            $table->string('direccion_socio', 60);
            $table->char('telefono_socio', 10);
            $table->string('correo_socio', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socio');
    }
};

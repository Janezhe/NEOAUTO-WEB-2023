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
        Schema::create('vehiculo_modelo', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');

            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('vehiculo_marca')->constrained();

            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('vehiculo_tipo')->constrained();

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_modelo');
    }
};

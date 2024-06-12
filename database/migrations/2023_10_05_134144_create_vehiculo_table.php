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
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('descripcion')->nullable();
            $table->string('color')->nullable();

            $table->string('motor')->nullable();
            $table->integer('potencia')->nullable();

            $table->integer('largo')->nullable();
            $table->integer('ancho')->nullable();
            $table->integer('alto')->nullable();
            $table->integer('peso')->nullable();

            $table->integer('cilindros')->nullable();
            $table->integer('cilindrada')->nullable();
            $table->integer('puertas')->nullable();
            $table->integer('precio');
            $table->integer('kilometraje');
            $table->year('fecha_fabricacion');
            $table->year('fecha_modelo');

            $table->string('imagenes_carpeta')->nullable();

            // $table->unsignedBigInteger('tipo_id');
            // $table->foreign('tipo_id')->references('id')->on('vehiculo_tipo')->constrained();

            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('vehiculo_marca')->constrained();

            $table->unsignedBigInteger('moto_id');
            $table->foreign('moto_id')->references('id')->on('vehiculo_moto')->constrained();

            $table->unsignedBigInteger('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('vehiculo_modelo')->constrained();

            $table->unsignedBigInteger('carroceria_id');
            $table->foreign('carroceria_id')->references('id')->on('vehiculo_carroceria')->constrained();

            $table->unsignedBigInteger('transmision_id');
            $table->foreign('transmision_id')->references('id')->on('vehiculo_transmision')->constrained();

            $table->unsignedBigInteger('combustible_id');
            $table->foreign('combustible_id')->references('id')->on('vehiculo_combustible')->constrained();

            $table->unsignedBigInteger('traccion_id');
            $table->foreign('traccion_id')->references('id')->on('vehiculo_traccion')->constrained();

            $table->unsignedBigInteger('condicion_id');
            $table->foreign('condicion_id')->references('id')->on('vehiculo_condicion')->constrained();

            $table->unsignedBigInteger('ubicacion_id');
            $table->foreign('ubicacion_id')->references('id')->on('vehiculo_ubicacion')->constrained();

            $table->unsignedBigInteger('camiones_id');
            $table->foreign('camiones_id')->references('id')->on('camiones_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto');
    }
};

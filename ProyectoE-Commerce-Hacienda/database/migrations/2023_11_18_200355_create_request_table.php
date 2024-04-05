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
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('consignee_id');
            $table->date('fecha');
            $table->boolean('confirmation')->default(false);
            // Otros campos si es necesario.
            $table->timestamps();
            $table->softDeletes();

            // Definir las claves foráneas
            $table->foreign('client_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('consignee_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};

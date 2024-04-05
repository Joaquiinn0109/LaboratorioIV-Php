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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publication_id');
            $table->unsignedBigInteger('client_id');     
            $table->boolean('confirmation')->default(false);     
            // Otros campos si es necesario.
            $table->timestamps();
            $table->softDeletes();

            // Definir las claves foráneas
            $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};

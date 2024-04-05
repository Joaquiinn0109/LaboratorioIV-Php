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
        Schema::create('people_fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('field_id');
            $table->timestamps();
            $table->softDeletes();
            // Definir las claves foráneas
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('people_fields');
    }
};

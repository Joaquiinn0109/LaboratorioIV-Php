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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->date('date');
            $table->string('health_status');
            $table->string('diet');
            $table->string('purpose');
            $table->string('breed');
            $table->string('category');
            $table->decimal('average_weight');
            $table->integer('age');
            $table->integer('quantity');
            $table->unsignedBigInteger('seller_id'); // Vendedor
            $table->unsignedBigInteger('consignee_id'); // Consignatario
            // Otros campos si es necesario.
            $table->timestamps();
            $table->softDeletes();

            // Definir las claves foráneas
           
            $table->foreign('seller_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('consignee_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};

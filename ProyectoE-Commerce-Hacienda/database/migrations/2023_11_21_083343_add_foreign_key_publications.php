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
        Schema::table('publications', function (Blueprint $table) {
            $table->unsignedBigInteger('field_id');
            $table->foreign('field_id')->references('id')->on('fields');
        });
    }
    
    public function down(): void
    {
        //
    }
};

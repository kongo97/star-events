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
        Schema::create('client_images', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->integer('image_id');

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('image_id')->references('id')->on('images');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_images');
    }
};
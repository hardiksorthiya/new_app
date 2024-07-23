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
        Schema::create('iconbox', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solutionpages_id');
            $table->string('box_image', 100)->nullable();
            $table->string('box_text', 100)->nullable();
            $table->string('box_description', 100)->nullable();
            $table->foreign('solutionpages_id')->references('id')->on('solutionpages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iconbox');
    }
};

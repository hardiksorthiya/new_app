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
        Schema::create('icon_box_solution_page', function (Blueprint $table) {
            $table->id();
            $table->foreignId('icon_box_id')->constrained()->onDelete('cascade');
            $table->foreignId('solution_page_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icon_box_solution_page');
    }
};

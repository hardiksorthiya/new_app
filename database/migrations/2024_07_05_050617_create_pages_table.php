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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('breadcumimage');
            $table->string('titletext');
            $table->mediumText('description');
            $table->string('imageone');
            $table->string('imagesecond');
            $table->text('descriptiontwo');
            $table->string('titletextsecond');
            $table->mediumText('descriptionsecond');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('meta_keyword');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};

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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->default('lorem');
            $table->string('header_caption')->default('lorem');
            $table->string('header_body', 800)->default('lorem');
            $table->string('sec1_caption_left')->default('lorem');
            $table->string('sec1_body_left')->default('lorem');
            $table->string('sec1_caption_right')->default('lorem');
            $table->string('sec1_body_right')->default('lorem');
            $table->string('sec2_image')->default('lorem');
            $table->string('sec2_caption')->default('lorem');
            $table->string('sec2_body')->default('lorem');
            $table->string('sec3_image')->default('lorem');
            $table->string('sec3_caption')->default('lorem');
            $table->string('sec3_body')->default('lorem');
            $table->string('sec4_caption')->default('lorem');
            $table->string('sec4_body')->default('lorem');
            $table->string('bod_caption')->default('lorem'); // BOD is Board of Directors. Check BOD table for more
            $table->string('bod_body')->default('lorem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};

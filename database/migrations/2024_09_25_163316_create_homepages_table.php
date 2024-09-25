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
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->string('header_image');
            $table->string('header_caption');
            $table->string('header_body');
            $table->string('tile1_image');
            $table->string('tile1_caption');
            $table->string('tile1_text');
            $table->string('tile1_btn_text');
            $table->string('tile1_btn_link');
            $table->string('tile2_image');
            $table->string('tile2_caption');
            $table->string('tile2_text');
            $table->string('tile2_btn_text');
            $table->string('tile2_btn_link');
            $table->string('insight_caption');
            $table->string('insight_body');
            $table->enum('insight_arr_type', ['sort', 'select'])->default('sort'); // Tile Arrangement Type
            $table->enum('insight_sort', ['asc', 'desc'])->default('asc');
            $table->string('insight_tile1_id');
            $table->string('insight_tile2_id');
            $table->string('insight_tile3_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};

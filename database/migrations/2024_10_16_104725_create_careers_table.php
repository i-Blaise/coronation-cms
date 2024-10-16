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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('header_image');
            $table->text('header_caption');
            $table->text('header_body');
            $table->string('sec1_image');
            $table->text('sec1_caption');
            $table->text('sec1_body');
            $table->string('sec2_image');
            $table->text('sec2_caption');
            $table->text('sec2_body');
            $table->string('card1_image');
            $table->string('card1_caption');
            $table->text('card1_body');
            $table->string('card2_image');
            $table->string('card2_caption');
            $table->text('card2_body');
            $table->string('card3_image');
            $table->string('card3_caption');
            $table->text('card3_body');
            $table->string('card4_image');
            $table->string('card4_caption');
            $table->text('card4_body');
            $table->string('card5_image');
            $table->string('card5_caption');
            $table->text('card5_body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};

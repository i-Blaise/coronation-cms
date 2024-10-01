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
        //pns stands for Products and Solutions page
        Schema::create('pns', function (Blueprint $table) {
            $table->id();
            $table->string('header_image');
            $table->string('header_caption');
            $table->string('header_body', 1080);
            $table->string('sec1_caption');
            $table->string('sec1_body');
            $table->string('motor_image');
            $table->string('motor_caption');
            $table->string('motor_body');
            $table->string('travel_image');
            $table->string('travel_caption');
            $table->string('travel_body');
            $table->string('house_image');
            $table->string('house_caption');
            $table->string('house_body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pn_s');
    }
};

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
        Schema::create('travel_insurance', function (Blueprint $table) {
            $table->id();
            $table->string('header_image');
            $table->string('header_caption');
            $table->text('header_body');
            $table->text('student_insurance_body');
            $table->text('student_insurance_features');
            $table->text('individual_insurance_body');
            $table->text('individual_insurance_features');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_insurance');
    }
};

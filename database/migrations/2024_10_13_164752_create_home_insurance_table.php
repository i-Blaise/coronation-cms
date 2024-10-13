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
        Schema::create('home_insurance', function (Blueprint $table) {
            $table->id();
            $table->string('header_image');
            $table->string('header_caption');
            $table->text('header_body');
            $table->string('sec1_caption');
            $table->text('sec1_body');
            $table->string('homeowner_ins_image');
            $table->text('homeowner_ins_body');
            $table->text('homeowner_ins_features');
            $table->string('householder_ins_image');
            $table->text('householder_ins_body');
            $table->text('householder_ins_features');
            $table->text('benefit_image');
            $table->text('benefit_body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_insurance');
    }
};

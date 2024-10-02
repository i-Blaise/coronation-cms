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
        Schema::create('motor_insurance', function (Blueprint $table) {
            $table->id();
            $table->string('header_image');
            $table->string('header_caption');
            $table->text('header_body');
            $table->string('sec1_image');
            $table->string('sec1_caption');
            $table->text('sec1_body');
            $table->text('compliance_ins_body'); // Compliance Insurance
            $table->text('compliance_ins_features');
            $table->text('tp_fire_theft_body'); // Third Party Fire and Theft Insurance
            $table->text('tp_fire_theft_features');
            $table->text('tp_only_body'); // Third Party Only Insurance
            $table->text('tp_only_features');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motor_insurance');
    }
};

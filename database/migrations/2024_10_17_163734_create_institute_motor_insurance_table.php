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
        Schema::create('institute_motor_insurance', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->default('n/a');
            $table->string('header_caption')->default('n/a');
            $table->text('header_body');
            $table->string('sec1_image')->default('n/a');
            $table->string('sec1_caption')->default('n/a');
            $table->text('sec1_body');
            $table->string('comprehensive_ins_image')->default('n/a');
            $table->text('comprehensive_ins_body'); // Comprehensive Insurance
            $table->text('compliance_ins_features');
            $table->string('tp_fire_theft_image')->default('n/a');
            $table->text('tp_fire_theft_body'); // Third Party Fire and Theft Insurance
            $table->text('tp_fire_theft_features');
            $table->string('tp_only_image')->default('n/a');
            $table->text('tp_only_body'); // Third Party Only Insurance
            $table->text('tp_only_features');
            $table->text('benefit_body');
            $table->text('comprehensive_benefits');
            $table->text('tp_fire_theft_benefits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institute_motor_insurance');
    }
};

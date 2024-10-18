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
        Schema::create('engineering_insurance', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->default('n/a');
            $table->string('header_caption')->default('n/a');
            $table->text('header_body');
            $table->string('sec1_caption')->default('n/a');
            $table->text('sec1_body');
            $table->string('plant_all_risk_image')->default('n/a');
            $table->text('plant_all_risk_body');
            $table->text('plant_all_risk_features');
            $table->string('contractors_all_risk_image')->default('n/a');
            $table->text('contractors_all_risk_body');
            $table->text('contractors_all_risk_features');
            $table->string('machinery_breakdown_image')->default('n/a');
            $table->text('machinery_breakdown_body');
            $table->text('machinery_breakdown_features');
            $table->string('erection_all_image')->default('n/a');
            $table->text('erection_all_body');
            $table->text('erection_all_features');
            $table->string('computer_all_risk_image')->default('n/a');
            $table->text('computer_all_risk_body');
            $table->text('computer_all_risk_features');
            $table->text('benefits_body');
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
        Schema::dropIfExists('engineering_insurance');
    }
};

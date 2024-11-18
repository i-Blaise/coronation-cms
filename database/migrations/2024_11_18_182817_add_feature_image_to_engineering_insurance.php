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
        Schema::table('engineering_insurance', function (Blueprint $table) {
            $table->string('plant_all_risk_features_image')->after('plant_all_risk_features');
            $table->string('contractors_all_risk_features_image')->after('contractors_all_risk_features');
            $table->string('machinery_breakdown_features_image')->after('machinery_breakdown_features');
            $table->string('erection_all_features_image')->after('erection_all_features');
            $table->string('computer_all_risk_features_image')->after('computer_all_risk_features');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('engineering_insurance', function (Blueprint $table) {
            $table->dropColumn('plant_all_risk_features_image');
            $table->dropColumn('contractors_all_risk_features_image');
            $table->dropColumn('machinery_breakdown_features_image');
            $table->dropColumn('erection_all_features_image');
            $table->dropColumn('computer_all_risk_features_image');
        });
    }
};

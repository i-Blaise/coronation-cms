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
        Schema::table('travel_insurance', function (Blueprint $table) {
            $table->string('student_feature_image')->after('student_insurance_features');
            $table->string('individual_feature_image')->after('individual_insurance_features');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('travel_insurance', function (Blueprint $table) {
            $table->dropColumn('student_feature_image');
            $table->dropColumn('individual_feature_image');
        });
    }
};

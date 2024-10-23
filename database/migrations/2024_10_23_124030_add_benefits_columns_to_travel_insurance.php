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
            $table->string('benefits_image')->after('individual_insurance_features');
            $table->text('benefits_body')->after('benefits_image');
            $table->text('travel_benefits')->after('benefits_body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('travel_insurance', function (Blueprint $table) {
            $table->dropColumn(['benefits_image', 'benefits_body', 'travel_benefits']);
        });
    }
};

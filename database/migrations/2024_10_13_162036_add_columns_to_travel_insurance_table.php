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
            $table->string('sec1_caption')->after('header_body');
            $table->text('sec1_body')->after('sec1_caption');
            $table->string('student_ins_image')->after('sec1_body');
            $table->string('individual_ins_image')->after('student_insurance_features');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('travel_insurance', function (Blueprint $table) {
            $table->dropColumn('sec1_caption');
            $table->dropColumn('sec1_body');
            $table->dropColumn('student_ins_image');
            $table->dropColumn('individual_ins_image');
        });
    }
};

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
        Schema::table('motor_insurance', function (Blueprint $table) {
            $table->text('benefits_body')->after('tp_only_features');
            $table->text('comprehensive_ins_benefits')->after('benefits_body');
            $table->text('tp_fire_theft_benefits')->after('comprehensive_ins_benefits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('motor_insurance', function (Blueprint $table) {
            $table->dropColumn(['benefits_body', 'comprehensive_ins_benefits', 'tp_fire_theft_benefits']);
        });
    }
};

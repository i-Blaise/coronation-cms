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
            $table->string('compliance_ins_feature_image')->after('compliance_ins_body');
            $table->string('tp_fire_theft_features_image')->after('tp_fire_theft_body');
            $table->string('tp_only_features_image')->after('tp_only_body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('motor_insurance', function (Blueprint $table) {
            $table->dropColumn('compliance_ins_feature_image');
            $table->dropColumn('tp_fire_theft_features_image');
            $table->dropColumn('tp_only_features_image');
        });
    }
};

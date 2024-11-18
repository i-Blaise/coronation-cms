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
        Schema::table('home_insurance', function (Blueprint $table) {
            $table->string('homeowner_feature_image')->after('homeowner_ins_features');
            $table->string('householder_feature_image')->after('householder_ins_features');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_insurance', function (Blueprint $table) {
            $table->dropColumn('homeowner_feature_image');
            $table->dropColumn('householder_feature_image');
        });
    }
};

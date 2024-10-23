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
            $table->text('home_benefits')->after('benefit_body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_insurance', function (Blueprint $table) {
            $table->dropColumn('home_benefits');
        });
    }
};

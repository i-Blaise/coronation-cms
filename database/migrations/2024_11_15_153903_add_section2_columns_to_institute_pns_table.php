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
        Schema::table('institute_pns', function (Blueprint $table) {
            $table->string('sec2_image')->after('motor_body');
            $table->text('sec2_caption')->after('sec2_image');
            $table->text('sec2_body')->after('sec2_caption');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('institute_pns', function (Blueprint $table) {
            $table->dropColumn('sec2_image');
            $table->dropColumn('sec2_caption');
            $table->dropColumn('sec2_body');
        });
    }
};

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
        Schema::table('about_us', function (Blueprint $table) {
            $table->string('sec1_body_left', 1080)->change();
            $table->string('sec1_body_right', 1080)->change();
            $table->string('sec2_body', 1080)->change();
            $table->string('sec3_body', 1080)->change();
            $table->string('sec4_body', 1080)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->string('sec1_body_left')->change();
            $table->string('sec1_body_right')->change();
            $table->string('sec2_body')->change();
            $table->string('sec3_body')->change();
            $table->string('sec4_body')->change();
        });
    }
};

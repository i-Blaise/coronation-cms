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
        Schema::table('homepage', function (Blueprint $table) {
            $table->text('header_body')->change();
            $table->text('header_caption')->change();
            $table->text('tile1_text')->change();
            $table->text('tile1_caption')->change();
            $table->text('tile2_text')->change();
            $table->text('insight_body')->change();
            $table->text('tile2_caption')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homepage', function (Blueprint $table) {
            $table->string('header_caption');
            $table->string('header_body');
            $table->string('tile1_caption');
            $table->string('tile1_text');
            $table->string('tile2_caption');
            $table->string('tile2_text');
        });
    }
};

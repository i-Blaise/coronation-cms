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
        Schema::create('institute_pns', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->default('default');
            $table->string('header_caption')->default('default');
            $table->text('header_body');
            $table->string('sec1_caption')->default('default');
            $table->text('sec1_body');
            $table->string('motor_image')->default('default');
            $table->string('motor_caption')->default('default');
            $table->text('motor_body');
            $table->string('eng_image')->default('default');
            $table->string('eng_caption')->default('default');
            $table->text('eng_body');
            $table->string('marine_image')->default('default');
            $table->string('marine_caption')->default('default');
            $table->text('marine_body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institute_pns');
    }
};

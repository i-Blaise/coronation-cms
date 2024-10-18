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
        Schema::create('marine_insurance', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->default('n/a');
            $table->string('header_caption')->default('n/a');
            $table->text('header_body');
            $table->string('sec1_caption')->default('n/a');
            $table->text('sec1_body');
            $table->string('marine_cargo_features_image')->default('n/a');
            $table->text('marine_cargo_body');
            $table->text('marine_cargo_features');
            $table->string('marine_hull_features_image')->default('n/a');
            $table->text('marine_hull_body');
            $table->text('marine_hull_features');
            $table->string('benefits_image')->default('n/a');
            $table->text('benefits_body');
            $table->text('marine_benefits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marine_insurance');
    }
};

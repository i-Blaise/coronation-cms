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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->default('default');
            $table->string('header_caption')->default('default');
            $table->text('header_body');
            $table->string('gh_call_no')->default('default');
            $table->string('gh_email')->default('default');
            $table->string('gh_headoffice')->default('default');
            $table->string('ng_call_no')->default('default');
            $table->string('ng_email')->default('default');
            $table->string('ng_headoffice')->default('default');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

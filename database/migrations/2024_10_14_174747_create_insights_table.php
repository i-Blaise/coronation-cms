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
        Schema::create('insights', function (Blueprint $table) {
            $table->id();
            $table->string('caption');
            $table->string('category');
            $table->text('body');
            $table->string('main_image');
            $table->string('blog_image1')->nullable();
            $table->string('blog_image2')->nullable();
            $table->string('blog_image3')->nullable();
            $table->text('quotes')->nullable();
            $table->string('excerpt')->nullable();
            $table->boolean('publish')->default(false);
            $table->string('publish_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insights');
    }
};

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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('about-us')->nullable();
            $table->string('about-us-image',200)->nullable();
            $table->text('our-vision')->nullable();
            $table->text('trust-heading')->nullable();
            $table->text('customer-satisfaction')->nullable();
            $table->text('quality')->nullable();
            $table->text('integrity')->nullable();
            $table->text('innovation')->nullable();
            $table->json('customer-satisfaction-images')->nullable();
            $table->json('quality-images')->nullable();
            $table->json('integrity-images')->nullable();
            $table->text('quote')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};

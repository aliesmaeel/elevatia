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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name',55);
            $table->string('video_section_web',255)->nullable();
            $table->string('video_section_mobile',255)->nullable();
            $table->text('about_section_text');
            $table->text('what_we_do_section_text');
            $table->text('our_team_section_text');
            $table->text('blogs_section_text');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};

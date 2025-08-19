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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100)->nullable();
            $table->string('slug', 191)->nullable();
            $table->text('title')->nullable();
            $table->string('permit_number')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('city')->default('Dubai')->nullable();
            $table->foreignId('community_id')->constrained();
            $table->text('description')->nullable();
            $table->string('size')->nullable();
            $table->foreignId('agent_id')->constrained();
            $table->boolean('featured')->nullable();
            $table->boolean('furnished')->nullable();
            $table->boolean('active')->nullable();
            $table->string('image')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

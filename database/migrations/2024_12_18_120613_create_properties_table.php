<?php

use App\Helpers\RealestateTypes;
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
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('address');
            $table->string('size');
            $table->integer('price')->nullable();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('community_id')->constrained();
            $table->foreignId('sub_community_id')->nullable()->constrained();
            $table->integer('bedrooms')->default(0);
            $table->integer('bathrooms')->default(0);
            $table->integer('garage')->default(0);
            $table->integer('build_year')->default(2005);
            $table->text('description')->nullable();
            $table->foreignId('agent_id')->constrained();
            $table->string('image')->nullable();
            $table->integer('rating')->default(0);
            $table->integer('reviews')->default(0);
            $table->boolean('is_premium')->default(false);
            $table->enum('status', array_keys(RealestateTypes::getPropertyStatus()))->default('for_sale');
            $table->boolean('active')->nullable();




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

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
        Schema::create('off_plan_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('address',255);
            $table->string('price_starts_from',100);
            $table->string('completion_date',100);
            $table->string('developer',100);
            $table->string('first_installment',10)->nullable();
            $table->string('under_construction',10)->nullable();
            $table->string('on_handover',10)->nullable();
            $table->text('features')->nullable();
            $table->string('lat',50)->nullable();
            $table->string('lng',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('off_plan_projects');
    }
};

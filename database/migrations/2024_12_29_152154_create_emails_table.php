<?php

use App\EmailTypes;
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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->enum('type',
                [
                    EmailTypes::CONTACT,
                    EmailTypes::REVIEW,
                    EmailTypes::SUBSCRIPTION
                ]
            )->default('contact');
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->time('time')->nullable();
            $table->date('date')->nullable();
            $table->string('property_type')->nullable();
            $table->text('message')->nullable();
            $table->boolean('is_read')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};

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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('whatsapp_number')->nullable(false);
            $table->string('describes')->nullable(false);
            $table->string('institute')->nullable(false);
            $table->integer('year_of_study')->nullable();
            $table->boolean('isAiesecer')->default(false)->nullable();
            $table->string('expectations')->nullable(false);
            $table->integer('interest')->unsigned()->check(function ($column) {
                $column->between(1, 5);
            });
            $table->string('coordinator')->nullable();
            $table->string('interestedField')->nullable();
            $table->string('jobPreference')->nullable();
            $table->string('cv')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};

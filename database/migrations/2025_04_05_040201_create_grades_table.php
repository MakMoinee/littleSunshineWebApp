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
        Schema::create('grades', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('studentID');
            $table->string('workBehavior')->nullable(true);
            $table->string('socialSkills')->nullable(true);
            $table->string('cognitiveSkills')->nullable(true);
            $table->string('fms')->nullable(true);
            $table->string('gms')->nullable(true);
            $table->string('adls')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};

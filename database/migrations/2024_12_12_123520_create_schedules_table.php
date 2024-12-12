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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('sessionID')->nullable(false);
            $table->integer('teacherID')->nullable(false);
            $table->integer('studentID')->nullable(false);
            $table->string('classType', 255)->nullable(false);
            $table->date('scheduleDate')->nullable(false);
            $table->timestamp('scheduleTime')->nullable(false);
            $table->string('meeting', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};

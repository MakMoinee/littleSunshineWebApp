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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('assignmentID')->autoIncrement();
            $table->integer('teacherID');
            $table->integer('studentID');
            $table->integer('sessionID');
            $table->string('title', 255);
            $table->date('dueDate');
            $table->timestamp('dueFrom');
            $table->timestamp('dueTo');
            $table->string('submissionType', 255);
            $table->string('filePath', 255)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};

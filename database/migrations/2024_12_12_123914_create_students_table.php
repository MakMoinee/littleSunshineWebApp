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
        Schema::create('students', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('userID');
            $table->string('studentID', 255);
            $table->string('name', 100);
            $table->string('guardian', 100);
            $table->string('contactNumber', 13);
            $table->string('guardianEmail', 100);
            $table->string('address', 255);
            $table->string('type', 100);
            $table->string('diagnose_remarks', 255)->nullable();
            $table->string('course', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

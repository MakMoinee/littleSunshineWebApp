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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('userID');
            $table->string('name', 100)->nullable();
            $table->string('contactNumber', 13)->nullable();
            $table->string('occupation', 255)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('emailAddress', 100)->nullable();
            $table->string('imagePath', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};

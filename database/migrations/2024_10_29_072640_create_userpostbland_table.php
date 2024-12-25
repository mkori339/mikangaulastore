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
        Schema::create('userpostbland', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('phone');
            $table->integer('cost');
            $table->string('imgpath');
            $table->foreignId('ownerid')->constrained('Registration')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userpostbland');
    }
};

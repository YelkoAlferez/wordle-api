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
        Schema::create('users_stats', function (Blueprint $table) {
            $table->id();
            $table->time('completion_time');
            $table->integer('used_attempts');
            $table->string('word');
            $table->boolean('completed')->default(0);
            $table->integer('max_correct_letters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_stats');
    }
};

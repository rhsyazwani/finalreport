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
        Schema::create('friendly_ses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('session_ID', 8);
            $table->string('court_no', 8);
            $table->string('category', 30);
            $table->date('date'); // Changed to 'date' type
            $table->time('time'); // Changed to 'time' type
            $table->string('team_one', 20);
            $table->string('team_two', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friendly_ses');
    }
};

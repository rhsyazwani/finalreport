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
        Schema::create('rec_payment_books', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(); // Allow null if needed
            $table->string('payment_id')->nullable();// Allow null if needed
            $table->decimal('amount', 8, 2);
            $table->date('date');
            $table->string('payment_method');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rec_payment_books');
    }
};

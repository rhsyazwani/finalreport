<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtBookingsTable extends Migration
{
    public function up():void
    {
        Schema::create('court_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->bigIncrements('booking_id');
            $table->string('court_no');
            $table->date('booking_date');
            $table->time('booking_time_start')->nullable();
            $table->time('booking_time_end')->nullable();
            $table->decimal('total_hours', 5, 2)->nullable(); // Allows up to 99.99 hours
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('court_bookings');
    }
}

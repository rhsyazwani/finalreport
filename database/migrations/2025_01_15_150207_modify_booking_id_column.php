<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBookingIdColumn extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('court_bookings', function (Blueprint $table) {
        $table->bigInteger('booking_id')->change(); // Example column update
    });
}

public function down()
{
    Schema::table('court_bookings', function (Blueprint $table) {
        $table->integer('booking_id')->change(); // Revert the change
    });
}
};


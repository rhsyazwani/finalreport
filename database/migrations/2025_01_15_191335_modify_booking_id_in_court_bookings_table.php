<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('court_bookings', function (Blueprint $table) {
            $table->dropColumn('id'); // Drop the conflicting AUTO_INCREMENT column if not needed
        });
    }

    public function down()
    {
        Schema::table('court_bookings', function (Blueprint $table) {
            $table->bigIncrements('id'); // Add it back if rolling back
        });
    }



};

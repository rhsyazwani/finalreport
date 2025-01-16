<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_id')->unique();
            $table->string('name');
            $table->string('phone_no')->unique();
            $table->string('email')->unique();
            $table->date('date_joined');
            $table->string('role')->default('Member');
            $table->string('membership_status');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('members');
    }
};

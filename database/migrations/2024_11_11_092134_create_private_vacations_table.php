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
        Schema::create('private_vacations', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->string('country');
            $table->string('airport');
            $table->string('meeting_point');
            $table->date('vacation_date');
            $table->string('mobile_number');
            $table->string('address');
            $table->string('employer');
            $table->string('occupation');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_vacations');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('role_id');
            $table->integer('age')->nullable();
            $table->string('dni')->unique();
            $table->date('birthdate')->nullable();
            $table->integer('phone_number')->unique();
            $table->string('employee_number')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->string('category')->nullable();
            $table->unsignedBigInteger('user_team_id')->nullable();
            $table->unsignedBigInteger('booking_id')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //references
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('user_team_id')->references('id')->on('teams_users');
            $table->foreign('booking_id')->references('id')->on('bookings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

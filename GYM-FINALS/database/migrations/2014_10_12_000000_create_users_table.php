<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();

        // Add the membership duration columns
        $table->timestamp('membership_duration_start')->nullable();
        $table->timestamp('membership_duration_end')->nullable();

        // Add the is_admin column
        $table->boolean('is_admin')->default(false); // Default value is false
    });
}

public function down(): void
{
    Schema::dropIfExists('users');
}

};
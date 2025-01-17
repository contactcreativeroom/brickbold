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
            $table->string('unique_id')->unique()->nullable();
            $table->string('user_type', 150)->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_image')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('landline_number', 150)->nullable();
            $table->longText('description')->nullable();
            $table->string('business_name')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('gstin', 150)->nullable();
            $table->string('rera_number', 150)->nullable();
            $table->string('website')->nullable();
            $table->string('password');
            $table->boolean('status')->default(1)->nullable();
            $table->boolean('verify_account')->default(0)->nullable();
            $table->string('google_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
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

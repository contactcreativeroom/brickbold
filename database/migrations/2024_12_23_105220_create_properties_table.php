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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->integer('zip_code')->nullable();
            $table->longText('location')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('price')->nullable();
            $table->integer('token_amount')->nullable()->default(0);
            $table->string('is_negotiable')->nullable()->default('negotiable');
            $table->string('availability')->nullable()->default('ready-to-move');
            $table->string('ownership')->nullable()->default('free-hold');
            $table->integer('build_year')->nullable()->default(1);
            $table->string('type')->nullable()->default('residential');
            $table->string('property_detail')->nullable();
            $table->string('for_type')->nullable()->default('for-sell');
            $table->string('plot_area')->nullable();
            $table->string('plot_type')->nullable();
            $table->string('carpet_area')->nullable();
            $table->string('builtup_area')->nullable();
            $table->integer('floors')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('balcony')->nullable();
            $table->string('facing')->nullable();
            $table->string('furnished')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('additional')->nullable();
            $table->string('amenities')->nullable();
            $table->string('video_link')->nullable(); 
            $table->integer('status')->nullable()->default(2);
            $table->integer('views')->nullable();
            $table->integer('is_luxury')->nullable();
            $table->integer('is_verified')->nullable()->default(0);
            $table->integer('is_premium')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

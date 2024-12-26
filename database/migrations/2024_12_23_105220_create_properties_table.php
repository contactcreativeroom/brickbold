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
            $table->longText('description')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->integer('zip_code')->nullable();
            $table->longText('location')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('price')->nullable();
            $table->string('price_detail')->nullable();
            $table->integer('is_negotiable')->nullable()->default(1)->comment('1=Negotiable, 2=Fixed Price');
            $table->integer('availability')->nullable()->default(1)->comment('1=Under Construction, 2=Fixed Price');
            $table->integer('ownership')->nullable()->default(1)->comment('1=Free Hold, 2=Lease Hold');
            $table->integer('build_year')->nullable()->default(1);
            $table->integer('type')->nullable()->default(1);
            $table->string('property_detail')->nullable();
            $table->integer('for_type')->nullable()->default(1)->comment('1=For Sell, 2=For Sell');
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
            $table->integer('verify')->nullable();
            $table->integer('user_premium')->nullable(); 
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

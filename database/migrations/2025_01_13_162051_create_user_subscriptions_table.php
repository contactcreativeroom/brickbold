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
        Schema::create('user_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->integer('order_id')->nullable()->default(1);
            $table->integer('property_id')->nullable()->default(null);
            $table->integer('package_id')->nullable()->default(null);
            $table->string('package_type')->nullable();
            $table->integer('post_property')->nullable()->default(1);
            $table->integer('contacts')->nullable()->default(1);
            $table->integer('days')->nullable()->default(1);
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subscriptions');
    }
};

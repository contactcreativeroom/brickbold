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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->string('razorpay_order_id')->nullable(); 
            $table->string('package_name')->nullable(); 
            $table->string('package_type')->nullable(); 
            $table->float('package_price')->nullable()->default(0);
            $table->float('discount')->nullable()->default(0);
            $table->float('grand_price')->nullable()->default(0);
            $table->longText('package_value')->nullable();
            $table->integer('post_property')->nullable()->default(1);
            $table->integer('contacts')->nullable()->default(1);
            $table->integer('days')->nullable()->default(1);
            $table->integer('status')->nullable()->default(1);
            $table->string('adminorder_date')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

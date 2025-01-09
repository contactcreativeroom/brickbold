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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->text('type')->nullable()->default('SELL');
            $table->string('name')->nullable();
            $table->text('profile')->nullable()->default('OWNER');
            $table->string('property_type')->nullable();
            $table->integer('unit')->nullable()->default(1);
            $table->integer('days')->nullable()->default(1);
            $table->integer('post_property')->nullable()->default(1);
            $table->float('price')->nullable()->default(0);
            $table->float('discount')->nullable()->default(0);
            $table->float('grand_price')->nullable()->default(0);
            $table->integer('status')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};

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
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->integer('user_type')->nullable()->comment('1=Owner,2=Agent,3=Builder,4=Buyer');
            $table->string('looking')->nullable()->comment('1=Sell,2=Rent');
            $table->string('company_name')->nullable();
            $table->string('company_number')->nullable();
            $table->string('company_address')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_types');
    }
};

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
        Schema::create('donation', function (Blueprint $table) {
            $table->id('donation_id');
            $table->unsignedBigInteger('donor_id')->nullable();
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->decimal('amount', 12, 2);
            $table->string('purpose');
            $table->timestamps();
            
 
            $table->foreign('donor_id')->references('user_id')->on('users')->nullOnDelete();
            $table->foreign('staff_id')->references('user_id')->on('users')->nullOnDelete();
            $table->foreign('category_id')->references('category_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation');
    }
};

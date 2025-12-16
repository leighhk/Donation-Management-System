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
        Schema::create('fund_utilzation', function (Blueprint $table) {
            $table->id('utilzation_id');
            $table->unsignedBigInteger('donation_id');
            $table->decimal('amount_used');
            $table->string('description');
            $table->date('date_usewd');
            $table->string('rules');
            $table->timestamps();

            $table->foreign('donation_id')->references('donation_id')->on('donation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_utilzation');
    }
};

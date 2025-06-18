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
        Schema::create("SnackSummary",function(Blueprint $table){
            $table->id("snack_summary_id")->unique();
            $table->bigInteger("booking_summary_id")->unsigned();
            $table->foreign("booking_summary_id")->references("booking_summary_id")->on("BookingSummary")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

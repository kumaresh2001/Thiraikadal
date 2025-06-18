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
        Schema::create("Invoice", function(Blueprint $table){
            $table->id("invoice_id")->unique();
            $table->bigInteger("booking_summary_id")->unsigned();
            $table->bigInteger("snack_summary_id")->unsigned();
            $table->foreign("booking_summary_id")->references("booking_summary_id")->on("BookingSummary")->onDelete("cascade");
            $table->foreign("snack_summary_id")->references("snack_summary_id")->on("SnackSummary")->onDelete("cascade");
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

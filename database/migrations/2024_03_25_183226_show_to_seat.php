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
        Schema::create('ShowToSeat', function (Blueprint $table) {
            $table->bigInteger("show_id")->unsigned();
            $table->bigInteger("seat_id")->unsigned();
            $table->boolean("booked_status");
            $table->bigInteger("summary_id")->unsinged();
            $table->foreign("show_id")->references("show_id")->on("Show")->onDelete("cascade");
            $table->foreign("seat_id")->references("seat_id")->on("Seat")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('seat', function (Blueprint $table) {
            //
        });
    }
};

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
        Schema::create("Seat",function(Blueprint $table){
            $table->id("seat_id");
            $table->bigInteger("screen_id")->unsigned();
            $table->string("seat_number");
            $table->foreign("screen_id")->references("screen_id")->on("Screen")->onDelete("cascade");
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

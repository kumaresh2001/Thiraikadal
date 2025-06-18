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
        Schema::create("Show",function(Blueprint $table){
            $table->id("show_id")->unique();
            $table->bigInteger("movie_id")->unsigned();
            $table->bigInteger("screen_id")->unsigned();
            $table->timestamp("start_time");
            $table->timestamp("end_time");
            $table->foreign("movie_id")->references("movie_id")->on("Movie")->onDelete("cascade");
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

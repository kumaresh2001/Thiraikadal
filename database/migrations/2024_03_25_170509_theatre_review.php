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
        Schema::create("TheatreReview", function(Blueprint $table){
            $table->id("review_id")->unique();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("theatre_id")->unsigned();
            $table->timestamp("created_on");
            $table->text("content");
            $table->float("rating");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("theatre_id")->references("theatre_id")->on("Theatre")->onDelete("cascade");

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

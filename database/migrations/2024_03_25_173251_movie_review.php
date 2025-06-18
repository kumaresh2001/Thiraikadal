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
        Schema::create("MovieReview", function(Blueprint $table){
            $table->id("review_id")->unique();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("movie_id")->unsigned();
            $table->timestamp("created_on");
            $table->text("content");
            $table->float("rating");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("movie_id")->references("movie_id")->on("Movie")->onDelete("cascade");
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

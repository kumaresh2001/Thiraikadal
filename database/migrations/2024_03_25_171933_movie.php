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
        Schema::create("Movie", function(Blueprint $table){
            $table->id("movie_id")->unqiue();
            $table->string("movie_name");
            $table->timestamp("release_date");
            $table->string("genre");
            $table->string("language");
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

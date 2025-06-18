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
        Schema::create("Screen",function(Blueprint $table){
            $table->id("screen_id")->unique();
            $table->string("screen_name");
            $table->bigInteger("theatre_id")->unsigned();
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

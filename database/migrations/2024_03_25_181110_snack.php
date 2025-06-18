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
        Schema::create("Snack",function(Blueprint $table){
            $table->id("snack_id")->unique();
            $table->bigInteger("theatre_id")->unsigned();
            $table->string("name");
            $table->float("price_per_item");
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

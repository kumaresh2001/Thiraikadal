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
        Schema::create("Theatre", function(Blueprint $table){
            $table->id("theatre_id")->unique();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("city_id")->unsigned();
            $table->string("theatre_name");
            $table->text("description");
            $table->string("image");  
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("city_id")->references("city_id")->on("City")->onDelete("cascade");  
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

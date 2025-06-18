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
        Schema::create('member', function (Blueprint $table) {
            $table->bigInteger("movie_id")->unsigned();
            $table->bigInteger("member_id")->unsigned();
            $table->string("role");
            $table->string("character_name");
            $table->foreign("movie_id")->references("movie_id")->on("Movie")->onDelete("cascade");
            $table->foreign("member_id")->references("member_id")->on("MovieMemberDetail")->onDelete("cascade");
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

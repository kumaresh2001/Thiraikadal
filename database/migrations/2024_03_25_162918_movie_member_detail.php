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
        Schema::create('MovieMemberDetail', function (Blueprint $table) {
            $table->id('member_id')->unique();
            $table->string('gender');
            $table->date('dob');
            $table->text('description');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MovieMemberDetail');
    }
};

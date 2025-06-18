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
        Schema::create("SnackOrder", function(Blueprint $table){
            $table->id("snack_order_id")->unqiue();
            $table->bigInteger("snack_id")->unsigned();
            $table->bigInteger("snack_summary_id")->unsigned();
            $table->integer("quantity");
            $table->bigInteger("price")->unsigned();
            $table->foreign("snack_id")->references("snack_id")->on("Snack")->onDelete("cascade");
            $table->foreign("snack_summary_id")->references("snack_summary_id")->on("SnackSummary")->onDelete("cascade");

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

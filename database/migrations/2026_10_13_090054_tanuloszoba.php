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
        $table->id();
        $table->string('szobatipus');
        $table->foreign('szobatipus_id')->references('id')->on('szobatipus');
        $table->integer('emelet');
        $table->integer('ferohely');
        $table->integer('foglalt_helyek');



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

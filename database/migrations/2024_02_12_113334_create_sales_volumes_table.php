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
        Schema::create('sales_volumes', function (Blueprint $table) {
            $table->id();
            $table->string('userName', 20)->index();
            $table->double('amount');
            $table->string('comment', 10000)->index();
            $table->integer('level');
            $table->integer('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_volumes');
    }
};

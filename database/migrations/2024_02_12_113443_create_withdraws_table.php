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
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->timestamp('amount');
            $table->integer('withdrawalStatus');
            $table->string('userName', 20);
            $table->integer('wallet');
            $table->string('bankAccountNumber', 20);
            $table->string('bankAccountName');
            $table->string('bankName');
            $table->integer('withdrawTo');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};

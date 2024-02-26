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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('product_quantity');
            $table->integer('grandtotal');
            $table->integer('status');
            $table->string('paymentMethod');
            $table->timestamp('dateOrdered');
            $table->timestamp('datePaid')->nullable();
            $table->timestamp('dateCollected')->nullable();
            $table->string('orderedBy', 20);
            $table->string('orderedPhoneNumber', 20);
            $table->string('orderedEmail');
            $table->integer('orderUserType');
            $table->string('orderUserName', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('description', 1000);
            $table->double('price');
            $table->integer('category');
            $table->integer('quantities');
            $table->string('photoUrl');
            $table->tinyInteger('isDeal')->nullable();
            $table->tinyInteger('isHome')->nullable();
            $table->timestamp('dealDate')->nullable();
            $table->timestamp('homeDate')->nullable();
            $table->double('memberPrice')->nullable();
            $table->double('crossRetailPrice');
            $table->double('wholesalePrice');
            $table->double('crossWholesalePrice');
            $table->integer('wholesaleMin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

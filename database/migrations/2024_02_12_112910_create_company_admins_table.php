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
        Schema::create('company_admins', function (Blueprint $table) {
            $table->id();
            $table->string('userName')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('password');
            $table->double('totalBalance');
            $table->integer('type');
            $table->timestamp('dateCreated');
            $table->string('roles');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_admins');
    }
};

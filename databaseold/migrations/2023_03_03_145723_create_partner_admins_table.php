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
        Schema::create('partner_admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained('partners')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            // $table->foreignId('user_id')->constrained('users');
            $table->date('last_connection');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_admins');
    }
};

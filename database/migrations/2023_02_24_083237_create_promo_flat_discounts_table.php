<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_flat_discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('partner_id')->constrained('partners')->nullable(); 
            $table->foreignId('user_id')->constrained('users'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo_flat_discounts');
    }
};

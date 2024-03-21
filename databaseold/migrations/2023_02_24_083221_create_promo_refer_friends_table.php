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
        Schema::create('promo_refer_friends', function (Blueprint $table) {
            $table->id();
            $table->longText('sender_in_app_description');
            $table->longText('receiver_message_description');
            $table->string('status');
            $table->string('receiver_promo_type');
            $table->string('sender_promo_type');
            $table->string('receiver_amount');
            $table->string('sender_amount');
            $table->foreignId('fleet_id')->constrained('fleets');
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
        Schema::dropIfExists('promo_refer_friends');
    }
};

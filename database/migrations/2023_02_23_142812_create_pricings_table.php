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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('status');
            $table->string('tax_option');
            $table->string('billing_unit');
            $table->string('first_unit_unlock_fee');
            $table->string('next_unit_fee');
            $table->string('tax_percentage');
            $table->string('max_billing_per_ride');
            $table->string('vehicle_reservation_price');
            $table->string('is_card_mandatory');
            $table->string('is_preauthorized_required');
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
        Schema::dropIfExists('pricings');
    }
};

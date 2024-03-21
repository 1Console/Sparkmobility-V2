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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_category');
            $table->string('vehicle_number');
            // $table->foreignId('fleet_id')->constrained('fleets');
            $table->longText('description');
            $table->string('mac_id');
            $table->string('imei');
            $table->longText('qr_image_path');
            $table->string('location');
            $table->string('availability_status');
            $table->longText('flags');
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
        Schema::dropIfExists('vehicles');
    }
};

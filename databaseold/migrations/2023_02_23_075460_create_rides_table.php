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
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('duration');
            $table->foreignId('rider_id')->constrained('riders');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('start_location');
            $table->string('end_location');
            $table->string('pause_duration');
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->foreignId('fleet_id')->constrained('fleets');
            $table->float('unlock_fee',8,2);
            $table->float('price',8,2);
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
        Schema::dropIfExists('rides');
    }
};

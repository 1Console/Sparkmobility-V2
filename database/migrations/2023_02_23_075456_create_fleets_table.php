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
        Schema::create('fleets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->string('country');
            $table->longText('managers');
            // $table->string('added_by')->constrained('users')->nullable();
            $table->string('location');
            $table->string('visibility');
            $table->string('reservation');
            $table->string('is_docking');
            $table->string('is_parking');
            $table->integer('low_speed_limit');
            $table->integer('high_speed_limit');
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
        Schema::dropIfExists('fleets');
    }
};

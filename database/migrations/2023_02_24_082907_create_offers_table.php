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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('location');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('category')->nullable();
            $table->longText('website');
            $table->string('status');
            $table->longText('image_path');
            $table->longText('notes');
            $table->string('radius');
            $table->longText('thumbnail_image_path');
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
        Schema::dropIfExists('offers');
    }
};

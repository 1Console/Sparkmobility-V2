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
        Schema::create('promo_free_rides', function (Blueprint $table) {           
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->date('start_time');
            $table->date('end_time');
            $table->longText('query_string');
            $table->foreignId('fleet_id')->constrained('fleets');
            $table->string('max_used');
            $table->string('max_single_used');
            $table->string('daily_used');
            $table->string('show_on_map');
            $table->string('promo_code');
            $table->string('usage_validity');
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
        Schema::dropIfExists('promo_free_rides');
    }
};

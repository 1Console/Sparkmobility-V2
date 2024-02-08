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
        Schema::create('ridelogs', function (Blueprint $table) {
            $table->id();
            $table->date('time');
            $table->float('amount',8,2);
            $table->string('pause_duration');
            $table->foreignId('ride_id')->constrained('rides');
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
        Schema::dropIfExists('ridelogs');
    }
};

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
        Schema::create('ticket_logs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('rider_id')->constrained('riders')->nullable();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->longText('body');
            $table->string('location');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('category');
            $table->longText('website');
            $table->string('status');
            $table->longText('image_path');
            $table->longText('notes');
            $table->string('radius');
            $table->longText('thumbnail_image_path');
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
        Schema::dropIfExists('ticket_logs');
    }
};

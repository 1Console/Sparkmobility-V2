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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained('partners')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->string('location');
            $table->string('info_title');
            $table->longText('info_link');
            $table->longText('image_path');
            $table->longText('notes');
            $table->string('radius');
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
        Schema::dropIfExists('banners');
    }
};

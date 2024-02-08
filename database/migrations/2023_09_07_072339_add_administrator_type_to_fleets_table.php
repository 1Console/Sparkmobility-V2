<?php

use App\Models\TrekkAdmin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('fleets', function (Blueprint $table) {
            $table->string('administrator_type',30)->after('country')->comment('determine if admin is trekk or admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::table('fleets', function($table) {
            $table->dropColumn('administrator_type');
        });
    }
};

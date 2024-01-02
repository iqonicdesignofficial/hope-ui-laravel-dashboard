<?php

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
        Schema::create('device_data', function (Blueprint $table) {
            $table->id();
            $table->string('device_code');
            $table->string('device_ip');
            $table->string('camera1_ip');
            $table->string('camera2_ip');
            $table->string('device_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_data');
    }
};

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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_stylish');
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_drink');
            $table->unsignedBigInteger('id_music');
            $table->dateTime('appointment_date');
            $table->timestamps();

            //linking tables with foreign key to use it 

            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_stylish')->references('id')->on('stylish');
            $table->foreign('id_service')->references('id')->on('services');
            $table->foreign('id_drink')->references('id')->on('drinks');
            $table->foreign('id_music')->references('id')->on('music');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};

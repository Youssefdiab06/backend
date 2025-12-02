<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('doctor_schedules', function (Blueprint $table) {
            $table->id();

            // MATCH doctors.id EXACTLY (unsigned BigInt)
            $table->unsignedBigInteger('doctor_id');

            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');

            $table->timestamps();

            // The correct foreign key
            $table->foreign('doctor_id')
                ->references('id')
                ->on('doctors')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctor_schedules');
    }
};
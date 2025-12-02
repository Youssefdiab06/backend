<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('doctor_id');   // FK to doctors.id
            $table->unsignedBigInteger('schedule_id'); // FK to doctor_schedules.id
            $table->text('message')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();

            // Foreign keys
            $table->foreign('doctor_id')
                  ->references('id')
                  ->on('doctors')
                  ->onDelete('cascade');

            $table->foreign('schedule_id')
                  ->references('id')
                  ->on('doctor_schedules')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
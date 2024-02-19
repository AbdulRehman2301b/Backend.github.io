<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('time');
            $table->string('phone');
            $table->string('service');
            $table->string('specialist');
            $table->string('address');
            // $table->string('cities');
            $table->string('date');
            $table->string('message');
            $table->string('status')->default('pending');
            // $table->string('doctorId');
            // $table->foreign('doctorId')->on('doctors')->references('id');
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
        Schema::dropIfExists('patient_appointments');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->integer('PersonnelCode')->nallable(false);
            $table->string('Name')->nallable(false);
            $table->string('Family')->nallable(false);
            $table->string('NatinalCode')->nallable(false);
            $table->string('IdCode')->nallable(false);//shenasnameh code
            $table->string('FatherName')->nallable(false);
            $table->string('BornPlace')->nalable(false);
            $table->string('Dateofbirth')->nalable(false);
            $table->string('EdCertificate')->nalable(false);//educational certificate
            $table->string('Address');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Mobile');
            $table->string('JobTitle');
            $table->string('Unit');
            $table->string('Placeofwork');
            $table->integer('ManagerId');                
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
        Schema::dropIfExists('personnels');
    }
}

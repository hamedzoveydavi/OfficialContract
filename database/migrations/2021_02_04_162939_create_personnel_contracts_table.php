<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel_contracts', function (Blueprint $table) {
            $table->id();
            $table->integer('PersonnelCode')->nallable(false);
            $table->string('SalaryDesk')->nallable(false);
            $table->integer('SalaryPrice')->nallable(false);
            $table->integer('SalaryPriode')->nallable(false);
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
        Schema::dropIfExists('personnel_contracts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel_salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('PerCode')->nallable(false);
            $table->string('Desc')->nallable(false);
            $table->integer('Price')->nallable(false);
            $table->integer('Priode')->nallable(false);
            $table->timestamps();
        });

        /*Schema::create('employment_hokms', function (Blueprint $table) {
            $table->id();
            $table->integer('PerCode')->nallable(false);
            $table->integer('‌‌BasicSalary')->nallable(false);
            $table->integer('FantasticJob')->nallable(false);
            $table->integer('ConsumptionAllowance')->nallable(false);
            $table->integer('HousingAllowance')->nallable(false);
            $table->integer('ChildExpenses')->nallable(false);
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel_salaries');
    }
}

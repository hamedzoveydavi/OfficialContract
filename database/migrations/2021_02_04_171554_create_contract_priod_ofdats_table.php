<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractPriodOfdatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_priod_ofdats', function (Blueprint $table) {
            $table->id();
            $table->string('StartDateFa')->nullable(false);
            $table->string('StartDateEn')->nullable(false);
            $table->string('EndDateFa')->nullable(false);
            $table->string('EndDateEn')->nullable(false);
            $table->integer('CounterOfPriod')->nullable(false);
            $table->integer('StatusPriod')->nullable(false);
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
        Schema::dropIfExists('contract_priod_ofdats');
    }
}

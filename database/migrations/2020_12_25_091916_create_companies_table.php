<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('CompanyNameFA')->nallable(false);
            $table->string('CompanyNameEN')->nallable(false);
            $table->string('Companyurl')->nallable(false);
            $table->string('CompanyEmail')->nallable(false);
            $table->string('CompanyAddress')->nallable(false);
            $table->string('CompanyManager')->nallable(false);
            $table->string('CompanyManagerPerCode')->nallable(false);
            $table->string('CompanyLogo')->nallable(false);
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
        Schema::dropIfExists('companies');
    }
}

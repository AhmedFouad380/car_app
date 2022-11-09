<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DriverData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Table('drivers', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->foreignId('city_id')->nullable()->constrained('cities')->nullOnDelete();
            $table->string('id_image_front')->nullable();
            $table->string('id_image_back')->nullable();
            $table->string('license_driving_front')->nullable();
            $table->string('license_driving_back')->nullable();
            $table->string('license_car_front')->nullable();
            $table->string('license_car_back')->nullable();
            $table->string('criminal_chip_front')->nullable();
            $table->string('criminal_chip_back')->nullable();
            $table->string('drug_analysis_front')->nullable();
            $table->string('drug_analysis_back')->nullable();
            $table->string('car_image')->nullable();
            $table->string('car_num')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

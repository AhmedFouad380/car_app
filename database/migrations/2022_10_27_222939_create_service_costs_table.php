<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_costs', function (Blueprint $table) {
            $table->id();
            $table->double('minimum_price')->default(0);
            $table->double('minimum_distance')->default(0);
            $table->integer('minimum_time')->default(0);
            $table->double('time_price')->default(0);
            $table->double('distance_price')->default(0);
            $table->integer('range_driver_search')->default(0);
            $table->integer('range_driver_available')->default(0);
            $table->integer('discount')->default(0);
            $table->enum('is_discount',['active','inactive'])->default('active');
            $table->enum('is_distance',['active','inactive'])->default('active');
            $table->enum('is_time',['active','inactive'])->default('active');
            $table->enum('is_active',['active','inactive'])->default('active');
            $table->foreignId('service_type_id')->constrained('service_types')->cascadeOnDelete();
            $table->foreignId('city_id')->constrained('cities')->cascadeOnDelete();
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
        Schema::dropIfExists('service_costs');
    }
}

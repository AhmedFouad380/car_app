<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToServiceCosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_costs', function (Blueprint $table) {
            $table->integer('waiting_time_price')->after('distance_price')->default(0);
            $table->enum('is_waiting_time',['active','inactive'])->after('is_time')->default('inactive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_costs', function (Blueprint $table) {
            //
        });
    }
}

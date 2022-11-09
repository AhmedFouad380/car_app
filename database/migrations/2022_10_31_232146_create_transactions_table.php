<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['pending','accept','start','finish','cancel'])->default('pending')->nullable();
            $table->double('start_lat')->nullable();
            $table->double('start_lng')->nullable();
            $table->double('end_lat')->nullable();
            $table->double('end_lng')->nullable();
            $table->double('start_driver_lat')->nullable();
            $table->double('start_driver_lng')->nullable();
            $table->double('end_driver_lat')->nullable();
            $table->double('end_driver_lng')->nullable();
            $table->double('first_distance')->nullable();
            $table->double('real_distance')->nullable();
            $table->integer('waiting_time')->default(0);
            $table->double('total_price')->default(0);
            $table->double('total_payed')->default(0);
            $table->text('start_address')->nullable();
            $table->text('end_address')->nullable();
            $table->date('date');
            $table->foreignId('service_type_id')->constrained('service_types')->restrictOnDelete();
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete();
            $table->foreignId('driver_id')->nullable()->constrained('users')->restrictOnDelete();
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
        Schema::dropIfExists('transactions');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('courts_timeslot_id');
            $table->unsignedInteger('webuser_id');
            $table->timestamps();
            $table->foreign('courts_timeslot_id')->references('id')->on('courts_timeslots')->onDelete('cascade');
            $table->foreign('webuser_id')->references('id')->on('webusers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

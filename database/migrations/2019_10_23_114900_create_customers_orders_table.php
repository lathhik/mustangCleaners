<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('service_type')->unsigned();
            $table->integer('order_status_id')->unsigned();
            $table->string('pickup_street_address');
            $table->string('pickup_house_no');
            $table->string('delivery_street_address');
            $table->string('delivery_house_no');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->date('delivery_date');
            $table->time('delivery_time');
            $table->bigInteger('phone');

            $table->timestamps();
        });

        Schema::table('customers_orders', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('service_type')->references('id')->on('service_types');
            $table->foreign('order_status_id')->references('id')->on('orders_status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_orders');
    }
}

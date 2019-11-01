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
            $table->integer('pickup_address_id')->unsigned();
            $table->integer('delivery_address_id')->unsigned();
            $table->date('pickup_date');
            $table->time('pickup_time_from');
            $table->time('pickup_time_to');
            $table->date('delivery_date');
            $table->time('delivery_time_from');
            $table->time('delivery_time_to');
            $table->bigInteger('phone')->nullable();

            $table->timestamps();
        });

        Schema::table('customers_orders', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('service_type')->references('id')->on('service_types');
            $table->foreign('order_status_id')->references('id')->on('orders_status');
            $table->foreign('pickup_address_id')->references('id')->on('addresses');
            $table->foreign('delivery_address_id')->references('id')->on('addresses');

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

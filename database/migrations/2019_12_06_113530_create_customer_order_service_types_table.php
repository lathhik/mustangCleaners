<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerOrderServiceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_order_service_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_order_id')->unsigned();
            $table->integer('items_lists_id')->unsigned();
            $table->string('quantity');
            $table->timestamps();
        });

        Schema::table('customer_order_service_types', function (Blueprint $table) {
            $table->foreign('customer_order_id')->references('id')->on('customers_orders');
            $table->foreign('items_lists_id')->references('id')->on('items_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_order_service_types');
    }
}

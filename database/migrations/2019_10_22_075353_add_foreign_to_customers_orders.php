<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToCustomersOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers_orders', function (Blueprint $table) {
            $table->integer('order_status_id')->unsigned()->after('customer_id');
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
        Schema::table('customers_orders', function (Blueprint $table) {
            $table->dropForeign('order_status_id');
        });
    }
}

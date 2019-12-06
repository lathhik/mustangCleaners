<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_type_id')->unsigned();
            $table->string('items');
            $table->float('amount');
            $table->timestamps();
        });

        Schema::table('items_lists', function (Blueprint $table){
           $table->foreign('service_type_id')->references('id')->on('service_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_lists');
    }
}

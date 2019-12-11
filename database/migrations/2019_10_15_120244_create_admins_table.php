<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->bigInteger('contact');
            $table->string('gender');
            $table->boolean('status')->default(1)->comment('0 is disabled and 1 is enabled');
            $table->enum('privilege', ['SA', 'LA', 'PA'])->default('SA')->comment('SA is Super Admin , LA is Laundry Admin and PA is Pickup Admin');
            $table->string('image');
            $table->string('remember_token', 255)->nullable();
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
        Schema::dropIfExists('admins');
    }
}

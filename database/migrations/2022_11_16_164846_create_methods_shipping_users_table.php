<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMethodsShippingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methods_shipping_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            
            $table->unsignedBigInteger('methods_shipping_id');
            $table->foreign('methods_shipping_id')->references('id')->on('methods_shipping');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('methods_shipping_users');
    }
}

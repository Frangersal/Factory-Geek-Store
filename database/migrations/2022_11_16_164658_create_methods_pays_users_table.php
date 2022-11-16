<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMethodsPaysUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methods_pays_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();            

            $table->unsignedBigInteger('methods_pays_id');
            $table->foreign('methods_pays_id')->references('id')->on('methods_pays');

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
        Schema::dropIfExists('methods_pays_users');
    }
}

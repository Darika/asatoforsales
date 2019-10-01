<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('email')->unique();
            $table->tinyInteger('verified_email')->default(0);
            $table->string('register_ip');
            $table->string('last_ip');
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('patronymic')->nullable();
            $table->bigInteger('phone')->unique();
            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('login')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

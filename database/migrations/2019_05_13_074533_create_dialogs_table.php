<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDialogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialogs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('dialog_id')->unique();
            $table->bigInteger('sender_id')->unsigned()->nullable();
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('rec_id')->unsigned()->nullable();
            $table->foreign('rec_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('text');
            $table->string('attach');
            $table->string('read');
            $table->string('sender_delete')->default(0);
            $table->tinyInteger('rec_delete')->default(0);
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
        Schema::dropIfExists('dialogs');
    }
}

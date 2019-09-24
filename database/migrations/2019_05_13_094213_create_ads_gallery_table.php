<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_gallery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ads_id')->unsigned();
            $table->foreign('ads_id')->references('id')->on('ads');
            $table->string('type');
            $table->string('link');
            $table->integer('top')->default(0);
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
        Schema::dropIfExists('ads_gallery');
    }
}

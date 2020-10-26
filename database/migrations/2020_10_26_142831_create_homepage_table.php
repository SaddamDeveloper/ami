<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->mediumText('address')->nullable();
            $table->mediumText('about')->nullable();
            $table->string('fb_id')->nullable();
            $table->string('tw_id')->nullable();
            $table->string('yt_id')->nullable();
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
        Schema::dropIfExists('homepage');
    }
}

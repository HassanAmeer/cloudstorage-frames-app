<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitleHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titleHistory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vId')->nullable();
            $table->string('vName')->nullable();
            $table->string('title1')->nullable();
            $table->string('desc1')->nullable();
            $table->json('ownerslist1')->nullable();
            $table->string('title2')->nullable();
            $table->string('desc2')->nullable();
            $table->json('ownerslist2')->nullable();
            $table->string('title3')->nullable();
            $table->string('desc3')->nullable();
            $table->json('ownerslist3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titleHistory');
    }
}
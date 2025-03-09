<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownersList', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vId');
            $table->string('vName');
            $table->string('ownerNo');
            $table->string('purchased');
            $table->string('subtitle');
            $table->json('details');
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
        Schema::dropIfExists('ownersList');
    }
}

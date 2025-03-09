<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnershipHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownershipHistory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('yearpurchased');
            $table->json('yearpurchasedowners');
            $table->string('typeofowner');
            $table->json('typeofowners');
            $table->string('ownershiplength');
            $table->json('ownershiplengthowners');
            $table->string('provinces');
            $table->json('provincesowners');
            $table->string('milesperyear');
            $table->json('milesperyearowners');
            $table->string('lastodometerreading');
            $table->json('lastodometerreadingowners');
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
        Schema::dropIfExists('ownershipHistory');
    }
}

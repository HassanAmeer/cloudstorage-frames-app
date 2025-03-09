<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleHistoryReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicleHistoryReports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vId')->nullable();
            $table->string('vImg')->nullable();
            $table->boolean('isShowImg')->nullable();
            $table->string('vName')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
            $table->string('points')->nullable();
            $table->string('footerDesc')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('vehicleHistoryReports');
    }
}
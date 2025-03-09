<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportSetting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicleHistoryReportDesc');
            $table->string('titleHistoryDesc');
            $table->string('facebookLink');
            $table->boolean('showFacebook');
            $table->string('instagaramLink');
            $table->boolean('showInstagaram');
            $table->string('whatsappLink');
            $table->boolean('showWhatsapp');
            $table->string('socialmediaDesc');
            $table->string('rightReservedDesc');
            $table->string('signatureDesc');
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
        Schema::dropIfExists('reportSetting');
    }
}

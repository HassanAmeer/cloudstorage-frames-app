<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionalHistory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vId')->nullable();
            $table->string('vName')->nullable();
            $table->string('totalLoss')->nullable();
            $table->json('totalLossOwners')->nullable();
            $table->string('structuredDamage')->nullable();
            $table->json('structuredDamageOwners')->nullable();
            $table->string('airBagDeployment')->nullable();
            $table->json('airBagDeploymentOwners')->nullable();
            $table->string('odoMeterCheck')->nullable();
            $table->json('odoMeterCheckOwners')->nullable();
            $table->string('accidentDamage')->nullable();
            $table->json('accidentDamageOwners')->nullable();
            $table->string('manufacturerRecall')->nullable();
            $table->json('manufacturerRecallOwners')->nullable();
            $table->string('basicWarranty')->nullable();
            $table->json('basicWarrantyOwners')->nullable();
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
        Schema::dropIfExists('additionalHistory');
    }
}
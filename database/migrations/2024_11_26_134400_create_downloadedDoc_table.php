<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadedDocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloadedDoc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('type')->nullable();
            $table->string('package')->nullable();
            $table->string('transactionId')->nullable();
            $table->string('cardNumber')->nullable();
            $table->string('vehicleId')->nullable();
            $table->string('vehicleType')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('bodyStyle')->nullable();
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
        Schema::dropIfExists('downloadedDoc');
    }
}

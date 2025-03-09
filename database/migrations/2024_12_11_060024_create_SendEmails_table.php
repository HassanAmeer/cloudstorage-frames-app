<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SendEmails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('options')->default('1')->nullable();
            $table->string('email')->default('@gmail.com')->nullable();
            $table->string('subject')->default('subject')->nullable();
            $table->string('body')->default('body')->nullable();
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
        Schema::dropIfExists('SendEmails');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactUs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('username')->comment('username')->nullable();
            $table->string('email')->default('user@gmail.com')->comment('useremail')->nullable();
            $table->string('message')->default('Empty')->comment('usermsg')->nullable();
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
        Schema::dropIfExists('contactUs');
    }
}

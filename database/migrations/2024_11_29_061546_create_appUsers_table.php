<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appUsers', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('isActive');
            $table->string('img');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('subscription');
            $table->string('totalStorage')->default('20')->comment('GB');
            $table->string('remaingStorage')->default('10')->comment('GB');
            $table->json('sharedTo')->default('4')->comment('to users');
            $table->json('sharedFrom')->comment('from other users');
            $table->json('shared')->comment('between all users');
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
        Schema::dropIfExists('appUsers');
    }
}

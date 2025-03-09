<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appSettings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appName');
            $table->string('appLogo');
            $table->string('shareEmailToUsers');
            $table->string('email');
            $table->boolean('showEmail');
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
        Schema::dropIfExists('appSettings');
    }
}

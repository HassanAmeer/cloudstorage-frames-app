<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCloudstorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloudstorage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid')->comment('user id');
            $table->string('folderId')->default('abc')->comment('generated');
            $table->string('folderName');
            $table->string('folderUsedSpace')->default('5');
            $table->json('items');
            $table->json('shared');
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
        Schema::dropIfExists('cloudstorage');
    }
}

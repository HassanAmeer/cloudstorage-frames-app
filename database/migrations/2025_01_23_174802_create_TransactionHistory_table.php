<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TransactionHistory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->comment('user i')->nullable();
            $table->boolean('status')->comment('paid unpaid')->nullable();
            $table->integer('payfor')->comment('0 for folder and 1 for frames')->nullable();
            $table->string('folderorframe')->comment('storage or fame  id')->nullable();
            $table->string('price')->comment('amount')->nullable();
            $table->string('trid')->comment('Transaction Id')->nullable();
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
        Schema::dropIfExists('TransactionHistory');
    }
}

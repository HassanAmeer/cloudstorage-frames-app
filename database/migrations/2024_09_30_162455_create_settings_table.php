<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('websiteName')->nullable();
            $table->string('websiteLogo')->nullable();
            $table->string('webisteMiniLogo')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('showWhatsapp')->nullable();
            $table->string('whatsappNumber')->nullable();
            $table->boolean('showFacebook')->nullable();
            $table->string('facebookLink')->nullable();
            $table->boolean('showInstagram')->nullable();
            $table->string('instagramLink')->nullable();
            $table->boolean('showPrivacyPolicy')->nullable();
            $table->boolean('showShippingPolicy')->nullable();
            $table->boolean('showReturnRefundPolicy')->nullable();
            $table->boolean('showTermsCondition')->nullable();
            $table->boolean('showPromotionBanner')->nullable();
            $table->boolean('introVideo')->nullable()->
            default('https://store-in.puma.com/VendorpageTheme/Enterprise/EThemeForPuma/images/product-not-found.jpg');

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
        Schema::dropIfExists('settings');
    }
}
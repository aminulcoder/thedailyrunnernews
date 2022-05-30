<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('working_day')->nullable();
            $table->string('working_time')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('facebook_group_link')->nullable();
            $table->string('facebook_page_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('intro_video_link')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('site_settings');
    }
}

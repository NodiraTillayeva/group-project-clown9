<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SiteUsers_id');
            $table->foreign('SiteUsers_id')->references('id')->on('site_users');
            $table->unsignedBigInteger('SitePosts_id');
            $table->foreign('SitePosts_id')->references('id')->on('site_posts');
            $table->boolean('isStarred');
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
        Schema::dropIfExists('stars');
    }
}

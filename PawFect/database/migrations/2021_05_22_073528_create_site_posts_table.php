<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SiteUsers_id');
            $table->foreign('SiteUsers_id')->references('id')->on('site_users');
            $table->string('PostName');
            $table->string('Type');
            $table->string('Breed');
            $table->integer('Age');
            $table->integer('Price');
            $table->text('Description');
            $table->string('PhotoPath');
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
        Schema::dropIfExists('site_posts');
    }
}

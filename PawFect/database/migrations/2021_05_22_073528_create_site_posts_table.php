<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site__pets', function (Blueprint $table) {
            $table->id('Pet_id');
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
        Schema::dropIfExists('site__pets');
    }
}

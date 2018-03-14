<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->default(0);
            $table->integer('order')->default(0);
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->integer('last_topic_id')->nullable();
            $table->integer('last_user_id')->nullable();
            $table->integer('topics')->default(0);
            $table->integer('replies')->default(0);
            $table->timestamps();

            //$table->foreign('parent_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

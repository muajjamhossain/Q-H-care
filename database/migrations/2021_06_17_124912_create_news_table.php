<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
          $table->bigIncrements('news_id');
          $table->string('news_title')->nullable();
          $table->date('news_date')->nullable();
          $table->string('news_image',50)->nullable();
          $table->string('news_slug',30)->nullable();
          $table->integer('news_status')->default(1);
          $table->integer('news_publish')->default(1);
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
        Schema::dropIfExists('news');
    }
}

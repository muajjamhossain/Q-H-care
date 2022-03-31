<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->integer('category_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_title')->nullable();
            $table->text('product_description')->nullable();
            $table->text('product_feature')->nullable();
            $table->string('product_image',50)->nullable();
            $table->string('product_slug',30)->nullable();
            $table->integer('product_publish')->default(0);
            $table->integer('product_status')->default(1);
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
        Schema::dropIfExists('products');
    }
}

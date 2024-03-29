<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 100);
            $table->string('detail', 500);
            $table->string('pic', 100);
            $table->integer('price');
            $table->integer('limit');
            $table->integer('catalogId')->unsigned();
            $table->integer('brandId')->unsigned()->nullable();
            $table->integer('shopId')->unsigned();
            $table->timestamps();

            $table->foreign('catalogId')->references('id')->on('catalogs');
            $table->foreign('brandId')->references('id')->on('brands');
            $table->foreign('shopId')->references('id')->on('shops');
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

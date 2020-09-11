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
            $table->string('productName');
            $table->text('productDescription')->nullable();
            $table->string('product_slug')->nullable();
            $table->integer('category_id');
            $table->string('pictureOne');
            $table->string('pictureTwo')->nullable();
            $table->string('pictureThree')->nullable();
            $table->integer('price');
            $table->integer('oldPrice')->nullable();
            $table->integer('serial_no')->nullable();
            $table->tinyInteger('status');           
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

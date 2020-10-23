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

//        'poster','name','slug','status','price','quantity'
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('poster');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('status')->default(1);
            $table->unsignedBigInteger('price')->default(0);
            $table->unsignedBigInteger('quantity')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('detail_product', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->mediumText('description')->nullable();
            $table->boolean('isComment')->default(1);
        });

        Schema::create('category_product',function(Blueprint $table){
           $table->unsignedBigInteger('category_id');
           $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
           $table->unsignedBigInteger('product_id');
           $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_product');
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('products');
    }
}

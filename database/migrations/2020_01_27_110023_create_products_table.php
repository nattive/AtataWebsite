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
            $table->bigIncrements('id');
            $table->string('productName');
            $table->string('productModel')->nullable();
            $table->string('productSKU')->nullable();
            $table->integer('productBrand_id')->default(1);
            $table->string('productPrice');
            $table->string('productSalePrice')->nullable();
            $table->longText('prodSpecification')->nullable();
            $table->longText('prodManufacturer')->nullable();
            $table->longText('productDescription');
            $table->string('prodcolor')->nullable();
            $table->string('images');
            $table->integer('category_id')->default(1);
            $table->integer('supplier_id')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('product');
    }
}

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
            $table->longText('ProductSpecification')->nullable();
            $table->longText('ProductManufacturerInfo')->nullable();
            $table->longText('ProductWarrantyInfo')->nullable();
            $table->longText('ProductUserManual')->nullable();
            $table->longText('productDescription');
            $table->string('productColour')->nullable();
            $table->string('images')->nullable();
            $table->integer('category_id')->default(1);
            $table->integer('hasSecurePay')->default(false);
            $table->integer('isInsured')->default(false);
            $table->integer('hasLogistics')->default(false);
            $table->integer('seller_id');
            $table->string('order_count');
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

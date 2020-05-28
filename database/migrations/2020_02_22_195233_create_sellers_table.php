<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('Product_Category');
            $table->string('AddressLine1');
            $table->string('AddressLine2')->nullable();
            $table->string('cityOrTown');
            $table->string('State');
            $table->string('Country');
            $table->string('TIN')->nullable();
            $table->string('PersonInCharge')->nullable();
            $table->string('Phone_number_PIC')->nullable();
            $table->string('Phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('BusinessRegistration')->nullable();
            $table->string('VATRegisterationStatus')->default('false');
            $table->string('Legal_or_business_name');
            $table->string('Is_verified')->default('false');
            $table->string('Bank');
            $table->string('Bank_code')->nullable();
            $table->string('Account_name');
            $table->string('IBAN')->nullable();
            $table->string('Account_number');
            $table->string('BVN');
            $table->string('atataId')->unique();
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
        Schema::dropIfExists('sellers');
    }
}

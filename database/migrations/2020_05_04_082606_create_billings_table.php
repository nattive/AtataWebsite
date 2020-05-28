<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('billing_name');
            $table->string('billing_address')->nullable();
            $table->string('billing_phoneNumber')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_name')->nullable();
            $table->string('ccv')->nullable();
            $table->string('exp_date')->nullable();
            $table->string('iss_date')->nullable();
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
        Schema::dropIfExists('billings');
    }
}

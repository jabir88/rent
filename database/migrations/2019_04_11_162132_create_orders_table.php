<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->float('currency_buying_price');
            $table->float('currency_selling_price');
            $table->string('customer_email');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('recive_cur_name');
            $table->string('send_cur_name');
            $table->float('taka_ditase');
            $table->float('taka_ditase_rate');
            $table->float('tk_dimu');
            $table->integer('confirm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return integer
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

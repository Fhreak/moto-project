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
            $table->integer('status_id');//web
            $table->integer('payment_id');//web y local
            $table->integer('type_id');//web y local
            $table->integer('city_id');//web
            $table->integer('commune_id');//web
            $table->integer('user_id');//web
            $table->integer('total_qty');//web y local
            $table->integer('shipping_type_id');//web
            $table->string('operation_number');//local
            $table->dateTime('shipping_date');//web
            $table->decimal('total_creditCard');
            $table->decimal('total_cash');
            $table->decimal('total');//web y local
            $table->timestamps();// web y local
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

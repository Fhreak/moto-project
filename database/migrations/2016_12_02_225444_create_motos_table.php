<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->integer('supplier_id')->nullable();
            $table->integer('category_id');
            $table->string('title');
            $table->string('description');
            $table->integer('year')->nullable();
            $table->string('kilometers')->nullable();
            $table->string('cc')->nullable();
            $table->decimal('price')->nullable();
            $table->integer('stock');
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
        Schema::dropIfExists('motos');
    }
}

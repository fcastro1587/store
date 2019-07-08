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
            $table->string('clv', 10);
            $table->string('name');
            $table->biginteger('brands_id')->unsigned();
            $table->string('description');
            $table->string('important_notes');
            $table->string('prince_from');
            $table->string('currency');
            $table->integer('active');
            $table->timestamps();

            $table->foreign('brands_id')->references('id')->on('brands');
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

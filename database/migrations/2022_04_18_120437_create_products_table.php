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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
//            $table->integer('type');
//            $table->foreign('type')->references('id')->on('products_type');
            $table->foreignId('type')->nullable()->constrained('products_type');
            $table->string('name',50);
            $table->string('description',255)->nullable();
            $table->string('img',255)->nullable();
            $table->float('price');
            $table->enum('currency', array('USD','EUR','UAH'));
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

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
            $table->foreignId('type')->nullable()->constrained('product_types');
            $table->string('name', 50);
            $table->string('description', 255)->nullable();
            $table->string('img', 255)->nullable();
            $table->float('price');
            $table->enum('currency', array('USD', 'EUR', 'UAH'));
            $table->integer('priority')->nullable();
            $table->integer('available')->default(0);
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

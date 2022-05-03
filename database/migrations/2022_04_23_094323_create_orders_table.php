<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->foreignId('kit_id')->nullable()->constrained('product');
            $table->foreignId('display_id')->nullable()->constrained('product');
            $table->foreignId('brakes_id')->nullable()->constrained('product');
            $table->foreignId('battery_id')->nullable()->constrained('product');
            $table->string('rim_size');
            $table->string('mobile_number');
            $table->string('name');
            $table->string('email');
            $table->string('message');
            # order_status 0 - just open , 1 - confirmed , 2- in_progres, 4 - rejected , 5 - closed
            $table->enum('order_status', [1, 2, 3, 4, 5]);
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

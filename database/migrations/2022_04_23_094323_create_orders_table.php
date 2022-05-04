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
            $table->id();
            $table->foreignId('kit_id')->constrained('products');
            $table->foreignId('display_id')->constrained('products');
            $table->foreignId('brakes_id')->constrained('products');
            $table->foreignId('battery_id')->constrained('products');
            $table->string('rim_size',3);
            $table->string('mobile_number',20);
            $table->string('name',20);
            $table->string('email',50);
            $table->string('message',255);
            # order_status 0 - just open , 1 - confirmed , 2- in_progress, 3 - rejected , 4 - closed
            $table->enum('order_status', ['Заказ открыт','Заказ в работе','Заказ отклонен','Заказ успешно завершен']);
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

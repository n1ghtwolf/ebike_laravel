<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kit_id')->constrained('products');
            $table->foreignId('display_id')->constrained('products');
            $table->foreignId('brakes_id')->constrained('products');
            $table->foreignId('battery_id')->constrained('products');
            $table->string('rim_size', 20);
            $table->string('mobile_number', 15);
            $table->string('name', 20);
            $table->string('email', 50);
            $table->string('message', 255);
            // order_status 0 - opened, 1 - in work, 2 - rejected, 3 - finished
            $table->enum('order_status', ['Заказ открыт','Заказ в работе','Заказ отклонен','Заказ успешно завершен'])->default('Заказ открыт');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
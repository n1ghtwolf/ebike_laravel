<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->nullable()->constrained('product_types');
            $table->string('name', 50);
            $table->string('description', 255)->nullable();
            $table->string('img', 255)->nullable();
            $table->float('price');
            $table->enum('currency', ['USD', 'EUR', 'UAH']);
            $table->integer('priority')->nullable();
            $table->integer('available')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
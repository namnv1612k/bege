<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->integer('id')->comment('ID hóa đơn chi tiết')->autoIncrement();
            $table->integer('order_id')->comment('ID hóa đơn tổng');
            $table->integer('product_id')->comment('ID sản phẩm');
            $table->integer('quantity')->comment('Số lượng sản phẩm');
            $table->timestamps();

            // Foreign key
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}

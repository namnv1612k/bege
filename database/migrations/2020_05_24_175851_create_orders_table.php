<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->integer('user_id')->comment('Người tạo hóa đơn')->nullable();
            $table->float('total', 12, 3)->comment('Tổng số tiền hóa đơn');
            $table->string('address')->comment('Địa chỉ giao hàng');
            $table->string('phone')->comment('Số điện thoại');
            $table->text('message')->comment('Lời nhắn');
            $table->boolean('payment_method')
                ->comment('Phương thức thanh toán: 0. Tiền mặt, 1. Paypal, 2. Credit cart');
            $table->boolean('status')->comment('Trạng thái: 1. Đã thanh toán, 0. Chưa thanh toán');
            $table->timestamps();

            // Foreign key
            $table->foreign('user_id')->references('id')->on('users');
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

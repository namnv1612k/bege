<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherOwnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_own', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->integer('voucher_id')->comment('ID mã khuyến mãi');
            $table->integer('user_id')->comment('ID người dùng');
            $table->boolean('is_used')->comment('Trạng thái sử dụng: 1. Đã sử dụng, 0. Chưa')
                ->default(0);
            $table->timestamps();

            // Foreign key
            $table->foreign('voucher_id')->references('id')->on('vouchers');
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
        Schema::dropIfExists('voucher_own');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('name')->comment('Tên mã giảm giá');
            $table->string('code')->comment('Mã giảm giá')->unique();
            $table->timestamp('start')->comment('Ngày bắt đầu');
            $table->timestamp('end')->comment('Ngày kết thúc');
            $table->boolean('type')->comment('Loại giảm giá: 1. Tiền mặt, 0. Phần trăm');
            $table->float('discount', 12, 3)->comment('Giá trị được giảm');
            $table->boolean('is_active')->comment('Trạng thái sự dụng: 1. Cho phép, 0. Chặn');
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
        Schema::dropIfExists('vouchers');
    }
}

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
            $table->timestamp('day_start')->comment('Ngày bắt đầu')->useCurrent();
            $table->timestamp('day_end')->comment('Ngày kết thúc')->useCurrent();
            $table->integer('discount')->comment('Phần trăm được giảm');
            $table->integer('max_discount')->comment('Giảm tối đa');
            $table->integer('condition')->comment('Giá trị tối thiểu');
            $table->integer('quantity')->comment('Tổng số mã đưa ra');
            $table->boolean('is_active')->comment('Trạng thái sự dụng: 1. Cho phép, 0. Chặn')->default(1);
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

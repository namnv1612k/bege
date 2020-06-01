<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->comment('ID user')->autoIncrement();
            $table->string('first_name')->comment('Tên');
            $table->string('last_name')->comment('Họ và tên đệm');
            $table->string('email')->comment('Địa chỉ email')->unique();
            $table->string('username')->comment('Username')->unique();
            $table->string('password')->comment('Mật khẩu');
            $table->string('avatar')->comment('Ảnh đại diện')
                ->default('images/avatar/avatar-default.png');
            $table->string('phone')->comment('Số điện thoại')->nullable();
            $table->string('address')->comment('Địa chỉ')->nullable();
            $table->integer('points')->comment('Tích điểm')->default(0);
            $table->boolean('is_active')->comment('Xác thực tài khoản: 1. Cho phép, 0. Chặn')
                ->default(1);
            $table->boolean('role')
                ->comment('Phân quyền: 0. Người dùng, 1. Quản trị viên, 2. Nhân viên')
                ->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->comment('Ghi nhớ đăng nhập');
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}

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
            $table->string('name')->comment('Họ tên');
            $table->string('email')->comment('Địa chỉ email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username')->comment('Username')->unique();
            $table->string('password')->comment('Mật khẩu');
            $table->rememberToken()->comment('Ghi nhớ đăng nhập');
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

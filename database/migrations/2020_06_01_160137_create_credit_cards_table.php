<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('type')->comment('Loại ther');
            $table->bigInteger('cart_number')->comment('Số thẻ');
            $table->timestamp('exp')->comment('Ngày hết hạn');
            $table->integer('cvv')->comment('CVV');
            $table->integer('user_id')->comment('ID Người dùng');
            $table->timestamps();

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
        Schema::dropIfExists('credit_cards');
    }
}

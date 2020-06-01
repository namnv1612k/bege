<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->text('content')->comment('Nội dung comment')->nullable();
            $table->integer('rate')->comment('Đánh giá sao');
            $table->integer('reply_for')->comment('Comment trả lời')->nullable();
            $table->integer('product_id')->comment('ID sản phẩm');
            $table->integer('user_id')->comment('ID người comment');
            $table->boolean('is_active')->comment('Cho phép hiện thị: 1. Có, 0. Không')->default(1);

            // Foreign key
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('comments');
    }
}

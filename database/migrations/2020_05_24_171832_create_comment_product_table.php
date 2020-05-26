<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_product', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->integer('product_id')->comment('ID sản phẩm');
            $table->integer('created_by')->comment('ID người comment');
            $table->text('content')->comment('Nội dung comment')->nullable();
            $table->integer('rate')->comment('Đánh giá sao');
            $table->integer('reply_for')->comment('Comment trả lời')->default(null);
            $table->boolean('is_show')->comment('Cho phép hiện thị: 1. Có, 0. Không')->default(1);

            // Foreign key
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('comment_product');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('title')->comment('Tiêu đề');
            $table->string('content')->comment('Nội dung');
            $table->string('image')->comment('Ảnh hiện thị');
            $table->boolean('is_active')->comment('Trạng thái hiện thị: 1. Có, 0. Không')->default(1);
            $table->integer('sort')->comment('Thứ tự hiện thị')->default(1);
            $table->integer('product_id')->comment('ID sản phẩm');
            $table->timestamps();

            // Foreign key
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
        Schema::dropIfExists('news');
    }
}

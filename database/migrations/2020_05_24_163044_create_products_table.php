<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('name')->comment('Tên sản phẩm');
            $table->float('price', 11, 3)->comment('Giá gốc');
            $table->float('sale_price', 11, 3)->comment('Giá bán');
            $table->string('feature_image')->comment('Ảnh nổi bật');
            $table->integer('stocks')->comment('Số lượng sản phẩm');
            $table->string('slug')->comment('URL sản phẩm')->unique();
            $table->string('sku')->comment('Mã sản phẩm')->unique();
            $table->text('intro')->comment('Giới thiệu sản phẩm');
            $table->text('desc')->comment('Mô tả sản phẩm');
            $table->float('rate', 1, 2)->comment('Đánh giá sao')->default(0);
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
        Schema::dropIfExists('products');
    }
}
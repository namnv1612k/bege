<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealHotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_hot', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->integer('product_id')->comment('ID sản phẩm');
            $table->text('desc')->comment('Mô tả nội dung khuyến mãi');
            $table->float('discount', 12, 3)->comment('Giá trị được giảm');
            $table->timestamp('day_start')->comment('Ngày bắt đầu')->useCurrent();
            $table->timestamp('day_end')->comment('Ngày kết thúc')->useCurrent();
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
        Schema::dropIfExists('deal_hot');
    }
}

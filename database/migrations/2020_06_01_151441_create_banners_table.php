<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('image')->comment('Ảnh banner');
            $table->integer('product_id')->comment('ID sản phẩm');
            $table->boolean('is_active')->comment('Trạng thái hiện thị: 1. Có, 0. Không')->default(1);
            $table->integer('sort')->comment('Thứ tự hiện thị')->default(1);
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
        Schema::dropIfExists('banners');
    }
}

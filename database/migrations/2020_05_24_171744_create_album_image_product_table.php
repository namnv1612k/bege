<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumImageProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_image_product', function (Blueprint $table) {
            $table->integer('product_id')->comment('ID sản phẩm');
            $table->string('image')->comment('Ảnh album');
            $table->integer('sort')->comment('Thứ tự sắp xếp')->default(1);

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
        Schema::dropIfExists('album_image_product');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationProductVsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_product_vs_tag', function (Blueprint $table) {
            $table->integer('tag_id')->comment('ID tag');
            $table->integer('product_id')->comment('ID sản phẩm');

            // Foreign key
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('relation_product_vs_tag');
    }
}

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
            $table->float('discount', 12, 3)->comment('Giá trị được giảm');
            $table->timestamp('start')->comment('Ngày bắt đầu');
            $table->timestamp('end')->comment('Ngày kết thúc');
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
        Schema::dropIfExists('deal_hot');
    }
}

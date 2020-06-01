<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('title_1', 20)->comment('Chữ dòng 1');
            $table->string('title_2', 20)->comment('Chữ dòng 2');
            $table->string('title_3', 20)->comment('Chữ dòng 3');
            $table->string('content', 50)->comment('Nội dung');
            $table->string('image');
            $table->string('url')->comment('URL slide');
            $table->boolean('is_active')->comment('Trạng thái hiện thị: 1. Có, 0. Không')->default(1);
            $table->integer('sort')->comment('Thứ tự hiện thị');
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
        Schema::dropIfExists('slides');
    }
}

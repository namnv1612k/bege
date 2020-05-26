<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('name')->comment('Tên bài viết');
            $table->string('slug')->comment('URL bài viết');
            $table->string('feature_image')->comment('Ảnh nổi bật');
            $table->text('content')->comment('Nội dung bài viết');
            $table->integer('created_by')->comment('ID người tạo');
            $table->boolean('is_show')->comment('Cho phép hiện thị: 0. Chặn, 1. Cho phép');
            $table->timestamps();

            // Foreign key
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}

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
            $table->string('slug')->comment('URL bài viết')->unique();
            $table->string('feature_image')->comment('Ảnh nổi bật');
            $table->text('content')->comment('Nội dung bài viết');
            $table->integer('views')->comment('Lượt xem')->default(0);
            $table->integer('user_id')->comment('ID người tạo');
            $table->boolean('is_active')->comment('Cho phép hiện thị: 0. Chặn, 1. Cho phép')->default(1);
            $table->timestamps();

            // Foreign key
            $table->foreign('user_id')->references('id')->on('users');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->text('content')->comment('Nội dung comment');
            $table->integer('reply_for')->comment('Comment trả lời')->nullable();
            $table->boolean('is_active')->comment('Cho phép hiện thị: 1. Có, 0. Không')
                ->default(1);
            $table->integer('user_id')->comment('ID người tạo');
            $table->integer('blog_id')->comment('ID bài viết');
            $table->timestamps();

            // Foreign key
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('blog_id')->references('id')->on('blogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_comments');
    }
}

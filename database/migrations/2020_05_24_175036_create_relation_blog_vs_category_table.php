<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationBlogVsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_blog_vs_category', function (Blueprint $table) {
            $table->integer('category_id')->comment('ID danh mục blog');
            $table->integer('blog_id')->comment('ID blog');

            // Foreign key
            $table->foreign('category_id')->references('id')->on('blog_categories');
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
        Schema::dropIfExists('ralation_blog_vs_category');
    }
}

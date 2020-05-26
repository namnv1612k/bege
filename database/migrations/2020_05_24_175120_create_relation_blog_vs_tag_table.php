<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationBlogVsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_blog_vs_tag', function (Blueprint $table) {
            $table->integer('tag_id')->comment('ID tag blog');
            $table->integer('blog_id')->comment('ID blog');

            // Foreign key
            $table->foreign('tag_id')->references('id')->on('blog_tags');
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
        Schema::dropIfExists('ralation_blog_vs_tag');
    }
}

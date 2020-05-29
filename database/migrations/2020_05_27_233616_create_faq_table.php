<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('title')->comment('Tiêu đề');
            $table->text('content')->comment('Nội dung Faq');
            $table->boolean('is_active')->comment('Trạng thái hiện thị: 1. Có, 0. Không');
            $table->softDeletes();
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
        Schema::dropIfExists('faq');
    }
}

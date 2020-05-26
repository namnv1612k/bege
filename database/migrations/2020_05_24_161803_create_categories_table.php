<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('id')->comment('ID')->autoIncrement();
            $table->string('icon')->comment('Icon danh mục')->nullable();
            $table->string('name')->comment('Tên danh mục');
            $table->string('slug')->comment('URL đường dẫn')->unique();
            $table->integer('subcategory')->comment('Danh mục con của ...')->nullable();
            $table->string('image')->comment('Ảnh hiện thị')->nullable();
            $table->boolean('is_active')->comment('Cho phép hiện thị: 1. Có, 0. Không')->default(1);
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
        Schema::dropIfExists('categories');
    }
}

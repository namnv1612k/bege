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
            $table->string('icon')->comment('Icon danh mục');
            $table->string('name')->comment('Tên danh mục');
            $table->string('slug')->comment('URL đường dẫn')->unique();
            $table->integer('subcategory')->comment('Danh mục con của ...')->default(null);
            $table->string('image')->comment('Ảnh hiện thị')->nullable();
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

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('vi_VN');
        for ($i = 0; $i < 20; $i++) {
            $name = $faker->text;
            DB::table('blog_categories')->insert([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }
    }
}

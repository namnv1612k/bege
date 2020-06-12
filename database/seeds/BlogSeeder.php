<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('vi_VN');
        for ($i = 0; $i < 30; $i++) {
            $name = $faker->text(20);
            $id_blog = DB::table('blogs')->insertGetId([
                'name' => $name,
                'slug' => Str::slug($name),
                'feature_image' => 'https://via.placeholder.com/1170x700?text=Blog ' . $i,
                'content' => $faker->text(2000),
                'user_id' => DB::table('users')->inRandomOrder()->first('id')->id,
                'is_active' => rand(0, 1)
            ]);

            for ($j = 0; $j < 2; $j++) {
                DB::table('relation_blog_vs_category')->insert([
                    'category_id' => DB::table('blog_categories')->inRandomOrder()->first('id')->id,
                    'blog_id' => $id_blog
                ]);
            }

            for ($k = 0; $k < 4; $k++) {
                DB::table('relation_blog_vs_tag')->insert([
                    'tag_id' => DB::table('blog_tags')->inRandomOrder()->first('id')->id,
                    'blog_id' => $id_blog
                ]);
            }

            for ($l = 0; $l < 4; $l++) {
                DB::table('blog_comments')->insert([
                    'content' => $faker->text(30),
                    'is_active' => rand(0, 1),
                    'user_id' => DB::table('users')->inRandomOrder()->first('id')->id,
                    'blog_id' => $id_blog
                ]);
            }
        }
    }
}

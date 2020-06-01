<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagBlogSeeder extends Seeder
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
            $name = $faker->text(10);
            DB::table('blog_tags')->insert([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }
    }
}

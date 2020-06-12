<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        for ($i = 0; $i < 10; $i++) {
            DB::table('slides')->insert([
                'title_1' => $faker->text(20),
                'title_2' => $faker->text(20),
                'title_3' => $faker->text(20),
                'content' => $faker->text(40),
                'image' => 'https://via.placeholder.com/1920x650?text=Slide ' . $i,
                'url' => 'product/' . DB::table('products')->inRandomOrder()->first('slug')->slug,
                'sort' => rand(0, 10)
            ]);
        }
    }
}

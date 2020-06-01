<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('vi_VN');
        for ($i = 0; $i < 10; $i++) {
            $product = DB::table('products')->inRandomOrder()->first();
            DB::table('news')->insert([
                'title' => $faker->text('15') . ' ' . $product->sale_price,
                'content' => $faker->randomAscii,
                'image' => 'https://via.placeholder.com/480x240?text=News - ' . $product->name,
                'sort' => rand(0, 10),
                'product_id' => $product->id
            ]);
        }
    }
}

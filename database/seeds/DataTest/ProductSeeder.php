<?php

use App\Models\Supplier;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Provider\Image;
use \Faker\Provider\Lorem;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        DB::table('categories')->chunkById(20, function ($cates) use ($faker) {
            foreach ($cates as $cate) {
                $name = $faker->text(10) . ' - ' . $cate->name;

                // Products
                $id_product = DB::table('products')->insertGetId([
                    'name' => $name,
                    'price' => rand(1000000, 9999999),
                    'sale_price' => rand(100000, 999999),
                    'feature_image' => 'https://via.placeholder.com/300x300?text=' . $name,
                    'stocks' => rand(0, 100),
                    'slug' => Str::slug($name),
                    'sku' => strtoupper(uniqid()),
                    'intro' => Lorem::text(),
                    'desc' => Lorem::text(),
                    'supplier_id' => DB::table('suppliers')->inRandomOrder()->first('id')->id,
                    'is_active' => rand(0, 1)
                ]);

                // Album image product
                for ($j = 0; $j < 6; $j++) {
                    DB::table('album_image_product')->insert([
                        'product_id' => $id_product,
                        'image' => 'https://via.placeholder.com/300x300?text=Album Image for' . $name,
                        'sort' => rand(1, 10)
                    ]);
                }

                if ($cate->subcategory != null) {
                    DB::table('relation_product_vs_category')->insert([
                        'category_id' => $cate->id,
                        'product_id' => $id_product
                    ]);

                    DB::table('relation_product_vs_category')->insert([
                        'category_id' => $cate->subcategory,
                        'product_id' => $id_product
                    ]);
                }

                for ($k = 0; $k < 5; $k++) {
                    DB::table('relation_product_vs_tag')->insert([
                        'tag_id' => DB::table('tags')->inRandomOrder()->first('id')->id,
                        'product_id' => $id_product
                    ]);
                }

                for ($l = 0; $l < 4; $l++) {
                    DB::table('comments')->insert([
                        'content' => $faker->text(30),
                        'is_active' => rand(0, 1),
                        'user_id' => DB::table('users')->inRandomOrder()->first('id')->id,
                        'product_id' => $id_product,
                        'rate' => rand(0, 5)
                    ]);
                }
            }
        });
    }
}

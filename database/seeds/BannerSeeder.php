<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 4; $i++) {
            DB::table('banners')->insert([
                'image' => 'https://via.placeholder.com/1170x200?text=Banner ' . $i,
                'product_id' => DB::table('products')->inRandomOrder()->first('id')->id,
                'is_active' => rand(0, 1),
                'sort' => rand(0, 10)
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name_cate = [
            1 => 'Electronics',
            2 => 'Fashion',
            3 => 'Home & Kitchen',
            4 => 'Phones & Tablets',
            5 => 'TV & Video',
            6 => 'Beauty',
            7 => 'Sport & tourism',
            8 => 'Fruits & Veggies',
            9 => 'Computer & Laptop',
            10 => 'Meat & Seafood',
            11 => 'Samsung',
            12 => 'Sanyo',
        ];

        for ($i = 1; $i <= count($name_cate); $i++) {
            $icon = 'images/icons/' . $i . '.png';
            DB::table('categories')->insert([
                'icon' => $icon,
                'name' => $name_cate[$i],
                'slug' => Str::slug(Str::lower($name_cate[$i]), '-'),
            ]);

        }
    }
}

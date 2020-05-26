<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Cords And Cables',
            'slug' => Str::slug(Str::lower('Cords And Cables'), '-'),
            'subcategory' => 13
        ]);
        DB::table('categories')->insert([
            'name' => 'Gps Accessories',
            'slug' => Str::slug(Str::lower('Gps Accessories'), '-'),
            'subcategory' => 13
        ]);
        DB::table('categories')->insert([
            'name' => 'Microphones',
            'slug' => Str::slug(Str::lower('Microphones'), '-'),
            'subcategory' => 13
        ]);
        DB::table('categories')->insert([
            'name' => 'Wireless Transmitters',
            'slug' => Str::slug(Str::lower('Wireless Transmitters'), '-'),
            'subcategory' => 13
        ]);
        DB::table('categories')->insert([
            'name' => 'Camera One',
            'slug' => Str::slug(Str::lower('Camera One'), '-'),
            'subcategory' => 14
        ]);
        DB::table('categories')->insert([
            'name' => 'Camera Two',
            'slug' => Str::slug(Str::lower('Camera Two'), '-'),
            'subcategory' => 14
        ]);
        DB::table('categories')->insert([
            'name' => 'Camera Three',
            'slug' => Str::slug(Str::lower('Camera Three'), '-'),
            'subcategory' => 14
        ]);
        DB::table('categories')->insert([
            'name' => 'Camera Four',
            'slug' => Str::slug(Str::lower('Camera Four'), '-'),
            'subcategory' => 14
        ]);
        DB::table('categories')->insert([
            'name' => 'Camera One 1',
            'slug' => Str::slug(Str::lower('Camera One 1'), '-'),
            'subcategory' => 15
        ]);
        DB::table('categories')->insert([
            'name' => 'Camera Two 1',
            'slug' => Str::slug(Str::lower('Camera Two 1'), '-'),
            'subcategory' => 15
        ]);
        DB::table('categories')->insert([
            'name' => 'Camera Three 1',
            'slug' => Str::slug(Str::lower('Camera Three 1'), '-'),
            'subcategory' => 15
        ]);
        DB::table('categories')->insert([
            'name' => 'Camera Four 1',
            'slug' => Str::slug(Str::lower('Camera Four 1'), '-'),
            'subcategory' => 15
        ]);
        DB::table('categories')->insert([
            'name' => 'Blazers',
            'slug' => Str::slug(Str::lower('Blazers'), '-'),
            'subcategory' => 16
        ]);
        DB::table('categories')->insert([
            'name' => 'Boots',
            'slug' => Str::slug(Str::lower('Boots'), '-'),
            'subcategory' => 16
        ]);
        DB::table('categories')->insert([
            'name' => 'Pants',
            'slug' => Str::slug(Str::lower('Pants'), '-'),
            'subcategory' => 16
        ]);
        DB::table('categories')->insert([
            'name' => 'Tops & Tees',
            'slug' => Str::slug(Str::lower('Tops & Tees'), '-'),
            'subcategory' => 16
        ]);
        DB::table('categories')->insert([
            'name' => 'Bags',
            'slug' => Str::slug(Str::lower('Bags'), '-'),
            'subcategory' => 17
        ]);
        DB::table('categories')->insert([
            'name' => 'Bottoms',
            'slug' => Str::slug(Str::lower('Bottoms'), '-'),
            'subcategory' => 17
        ]);
        DB::table('categories')->insert([
            'name' => 'Shirts',
            'slug' => Str::slug(Str::lower('Shirts'), '-'),
            'subcategory' => 17
        ]);
        DB::table('categories')->insert([
            'name' => 'Tailored',
            'slug' => Str::slug(Str::lower('Tailored'), '-'),
            'subcategory' => 17
        ]);
    }
}

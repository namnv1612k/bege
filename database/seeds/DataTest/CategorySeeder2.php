<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'CAMERAS',
            'slug' => Str::slug(Str::lower('CAMERAS'), '-'),
            'subcategory' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'DIGITAL CAMERAS',
            'slug' => Str::slug(Str::lower('DIGITAL CAMERAS'), '-'),
            'subcategory' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'DIGITAL CAMERAS 1',
            'slug' => Str::slug(Str::lower('DIGITAL CAMERAS 1'), '-'),
            'subcategory' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'MEN’S FASHION',
            'slug' => Str::slug(Str::lower('MEN’S FASHION'), '-'),
            'subcategory' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'WOMEN’S FASHION',
            'slug' => Str::slug(Str::lower('WOMEN’S FASHION'), '-'),
            'subcategory' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'LARGE APPLIANCES',
            'slug' => Str::slug(Str::lower('LARGE APPLIANCES'), '-'),
            'subcategory' => 3
        ]);
        DB::table('categories')->insert([
            'name' => 'SMALL APPLIANCES',
            'slug' => Str::slug(Str::lower('SMALL APPLIANCES'), '-'),
            'subcategory' => 3
        ]);
        DB::table('categories')->insert([
            'name' => 'TABLET',
            'slug' => Str::slug(Str::lower('TABLET'), '-'),
            'subcategory' => 4
        ]);
        DB::table('categories')->insert([
            'name' => 'SMARTPHONE',
            'slug' => Str::slug(Str::lower('SMARTPHONE'), '-'),
            'subcategory' => 4
        ]);
        DB::table('categories')->insert([
            'name' => 'GAMING DESKTOPS',
            'slug' => Str::slug(Str::lower('GAMING DESKTOPS'), '-'),
            'subcategory' => 5
        ]);
    }
}

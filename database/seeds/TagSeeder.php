<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        for ($i = 0; $i < 50; $i++) {
            $name = $faker->name;
            DB::table('tags')->insert([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }
    }
}

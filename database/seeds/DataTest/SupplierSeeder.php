<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        for ($i = 0; $i < 30; $i++) {
            $name = $faker->company;
            DB::table('suppliers')->insert([
                'name' => $name,
                'slug' => Str::slug($name),
                'is_active' => rand(0, 1)
            ]);
        }
    }
}

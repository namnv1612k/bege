<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealHotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('deal_hot')->insert([
                'product_id' => DB::table('products')->inRandomOrder()->first('id')->id,
                'desc' => \Faker\Factory::create('vi_VN')->text(500),
                'discount' => rand(1000, 1000000),
                'day_start' => '2020-06-1 17:07:44',
                'day_end' => '2020-06-26 17:07:44',
            ]);
        }
    }
}

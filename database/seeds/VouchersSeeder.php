<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VouchersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            $discount = rand(1, 99);
            $condition = rand(100000, 999999);
            DB::table('vouchers')->insert([
                'name' => 'Voucher giảm ' . $discount .
                    ' % ( đơn hàng tối thiểu ' .
                    number_format($condition, 0, '', ',') . 'đ )',
                'code' => strtoupper(uniqid()),
                'day_start' => '2020-06-1 17:07:44',
                'day_end' => '2020-06-26 17:07:44',
                'discount' => $discount,
                'condition' => $condition,
                'max_discount' => rand(10000, 500000),
                'quantity' => rand(0, 20),
                'is_active' => rand(0, 1)
            ]);
        }
    }
}

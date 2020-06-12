<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreditCart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('vi_VN');
        $users = User::all();
        foreach ($users as $user) {
            DB::table('credit_cards')->insert([
                'type' => $faker->creditCardType,
                'cart_number' => $faker->creditCardNumber,
                'exp' => $faker->creditCardExpirationDate,
                'cvv' => rand(100, 999),
                'user_id' => $user->id
            ]);
        }
    }
}

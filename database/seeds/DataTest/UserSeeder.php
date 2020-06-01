<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('vi_VN');
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => '',
            'email' => 'nguyennam1612k@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('kutataxoa'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'points' => rand(1000, 99999),
            'role' => 1
        ]);

        DB::table('users')->insert([
            'first_name' => 'User',
            'last_name' => '',
            'email' => 'namnv1612k@gmail.com',
            'username' => 'user',
            'password' => Hash::make('kutataxoa'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'points' => rand(1000, 99999),
            'role' => 0
        ]);

        DB::table('users')->insert([
            'first_name' => 'Employee',
            'last_name' => '',
            'email' => 'namnvph08169@fpt.edu.vn',
            'username' => 'employee',
            'password' => Hash::make('kutataxoa'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'points' => rand(1000, 99999),
            'role' => 2
        ]);
    }
}

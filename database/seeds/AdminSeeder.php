<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'phone' => '0903828499',
            'gender' => 'male',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '0905200419',
            'gender' => 'female',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'dialga',
            'email' => 'spxdialga@gmail.com',
            'phone' => '0907310419',
            'gender' => 'male',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'phone' => '0907310418',
            'gender' => 'male',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'employee',
            'role_id' => 3,
            'email' => 'employee@gmail.com',
            'phone' => '0907310419',
            'gender' => 'female',
            'password' => Hash::make('123456'),
        ]);
    }
}

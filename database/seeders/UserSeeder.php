<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1, // admin rolü
        ]);

        User::create([
            'name' => 'Customer User',
            'email' => 'customer@example.com',
            'password' => Hash::make('password'),
            'role_id' => 2, // müşteri rolü
        ]);

        User::create([
            'name' => 'Store Owner',
            'email' => 'storeowner@example.com',
            'password' => Hash::make('password'),
            'role_id' => 3, // mağaza sahibi rolü
        ]);
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class users_login extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'polindi',
            'email' => 'polindi@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'polindah',
            'email' => 'polindah@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
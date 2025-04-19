<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'hoang',
            'email' => 'hoang@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'name' => 'test ' . $i,
                'email' => 'test' . $i . '@gmail.com',
                'password' => Hash::make('123456'),
            ]);
        }
    }
}

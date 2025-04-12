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
            'phone' => '0123456789',
            'address' => 'Bình Thuận',
            'password' => Hash::make('123456'),
        ]);

        for ($i = 1; $i <= 21; $i++) {
            User::create([
                'name' => 'test ' . $i,
                'email' => 'test' . $i . '@gmail.com',
                'phone' => '01234567' . $i,
                'address' => 'HCM',
                'password' => Hash::make('123456'),
            ]);
        }
    }
}

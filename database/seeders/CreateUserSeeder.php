<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => Hash::make('@12345'),
                'role' => 0
            ],
            [
                'name' => 'Editor',
                'email' => 'editor@example.com',
                'password' => Hash::make('@12345'),
                'role' => 1
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('@12345'),
                'role' => 2
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

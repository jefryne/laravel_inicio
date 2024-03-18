<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'example',
            'email' => 'example@gmail.com',
            'password' => '12345678',
        ]);
        User::create([
            'id' => 2,
            'name' => 'example 2',
            'email' => 'example2@gmail.com',
            'password' => '12345678',
        ]);
        User::create([
            'id' => 3,
            'name' => 'example 3',
            'email' => 'example3@gmail.com',
            'password' => '12345678',
        ]);
    }
}

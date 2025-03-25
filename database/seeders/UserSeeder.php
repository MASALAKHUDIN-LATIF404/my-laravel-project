<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Latif',
            'email' => 'maslakhudinlatif@gmail.com',
            'password' => \bcrypt('@latif404')
        ];

        User::insert($user);
    }
}

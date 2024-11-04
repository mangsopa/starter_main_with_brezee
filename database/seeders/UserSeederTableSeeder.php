<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'register' => 'KD001',
            'username' => 'Sofa',
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
        ]);

        User::factory()->create([
            'register' => 'KD002',
            'username' => 'Anggit',
            'name' => 'User',
            'email' => 'user@gmail.com',
        ]);
    }
}

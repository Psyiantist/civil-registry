<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'username' => 'admin1',
            'password' => Hash::make('civilnize2025'),
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin1@civilnize.com',
            'birthday' => '1990-01-01',
            'address' => '123 Admin Street, City',
            'status' => 'approved',
            'id_card_image' => 'default.jpg'
        ]);
    }
} 
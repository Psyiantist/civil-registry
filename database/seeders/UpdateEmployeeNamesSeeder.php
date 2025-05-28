<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateEmployeeNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Employee::whereNull('first_name')->update([
            'first_name' => 'Admin',
            'last_name' => 'User'
        ]);
    }
}

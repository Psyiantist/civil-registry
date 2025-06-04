<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'id_type' => 'Passport',
            'id_image' => 'default.jpg',
            'years_residency' => 1,
            'current_address' => 'Sample Address',
            'permanent_address' => 'Sample Address',
            'date_of_birth' => '2000-01-01',
            'is_verified' => false,
            'status' => 'Pending',
        ]);

        $this->call([
            RequirementSeeder::class,
            ContactSeeder::class,
            TestAppointmentsSeeder::class,
            EmployeeSeeder::class,
        ]);
    }
}

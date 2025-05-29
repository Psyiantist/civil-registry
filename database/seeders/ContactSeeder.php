<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::firstOrCreate(
            [], // No conditions, just create if none exists
            [
                'address' => '2/F Left Wing Executive Building City Government Complex, Maysilo Circle, Plainview, Mandaluyong City',
                'phone' => '8533-28-21',
                'email' => 'city.registrar@mandaluyong.gov.ph',
                'office_hours' => 'Monday to Friday: 8:00 AM - 5:00 PM',
            ]
        );
    }
} 
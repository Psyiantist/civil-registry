<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Requirement;

class RequirementSeeder extends Seeder
{
    public function run(): void
    {
        $requirements = [
            [
                'document_image' => 'default-requirement.jpg',
                'title' => 'Birth Certificate',
                'description' => 'Official document proving birth registration'
            ],
            [
                'document_image' => 'default-requirement.jpg',
                'title' => 'Marriage Certificate',
                'description' => 'Official document proving marriage registration'
            ],
            [
                'document_image' => 'default-requirement.jpg',
                'title' => 'Death Certificate',
                'description' => 'Official document proving death registration'
            ],
            [
                'document_image' => 'default-requirement.jpg',
                'title' => 'Certificate of No Marriage',
                'description' => 'Document certifying that a person has never been married'
            ],
            [
                'document_image' => 'default-requirement.jpg',
                'title' => 'Certificate of Residency',
                'description' => 'Document proving residency in Mandaluyong City'
            ]
        ];

        foreach ($requirements as $requirement) {
            Requirement::create($requirement);
        }
    }
} 
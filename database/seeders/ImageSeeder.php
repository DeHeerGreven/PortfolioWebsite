<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ImageSeeder extends Seeder
{
    public function run()
    {
        $imageFiles = [
            'bol.com.jpg',
            'coolblue.png',
            'jumbo.jpg',
            'mediamarkt.png',
            'nos.jpg',
            'website_blauw.jpg'
            // Voeg hier meer bestandsnamen toe indien nodig
        ];

        foreach ($imageFiles as $file) {
            // Kopieer het bestand naar de opslagmap
            $path = Storage::disk('public')->putFile('images', public_path('images/' . $file));

            // Kies een willekeurig project om aan de afbeelding te koppelen
            $project = Project::inRandomOrder()->first();

            // Sla de afbeelding op in de database met de project_id
            $project->images()->create([
                'name' => $path,
            ]);
        }
    }
}

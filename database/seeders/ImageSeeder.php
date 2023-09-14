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
            $path = public_path('images/' . $file);
            $newPath = Storage::disk('public')->putFile('images', $path);
            $imageUrl = Storage::url($newPath); // Nieuwe code toevoegen
        
            $project = Project::inRandomOrder()->first();
            $project->images()->create(['path' => $imageUrl]);
        }
    
    }
}

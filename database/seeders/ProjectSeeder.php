<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Project 1',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 1
        ]);
    
        Project::create([
            'title' => 'Project 2',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 1
        ]);

        Project::create([
            'title' => 'Project 3',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 2
        ]);
    
        Project::create([
            'title' => 'Project 4',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 2
        ]);

        Project::create([
            'title' => 'Project 5',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 3
        ]);
    
        Project::create([
            'title' => 'Project 6',
            'description' => 'Lorem ipsum dolor sit amet.',
            'category_id' => 3
        ]);
    
    }
}

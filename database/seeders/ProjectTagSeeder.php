<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTagSeeder extends Seeder
{
    public function run()
    {
        $projects = Project::all();
        $tags = Tag::all();

        foreach ($projects as $project) {
            $randomTags = $tags->random(rand(1, 3));

            $project->tags()->attach($randomTags);
        }
    }
}

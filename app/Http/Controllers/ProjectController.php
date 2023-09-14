<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Project;
use App\Models\ProjectTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
    
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('projects.create',[ 
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function store(Request $request)
    {
        // Valideer de ingediende gegevens
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tag_ids.*' => 'exists:tags,id',
        ]);

        // Maak een nieuw project aan
        $project = Project::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category_id'],
        ]);

        // Sla de afbeeldingen op in de image tabel en public/images map
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);

                Image::create([
                    'path' => $imageName,
                    'project_id' => $project->id,
                ]);
            }
        }

        // dd($request->file('images'));

        // Voeg de gekozen tags toe aan de project_tag tabel
        if ($request->has('tag_ids')) {
            foreach ($validatedData['tag_ids'] as $tagId) {
                ProjectTag::create([
                    'project_id' => $project->id,
                    'tag_id' => $tagId,
                ]);
            }
        }

        // Stuur een succesmelding terug naar de frontend
        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }
}

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
        $tags = Tag::all();
        $categories = Category::all();
    
        return view('projects.index', compact('projects', 'tags', 'categories'));
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

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('projects.edit', [
            'project' => $project,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tag_ids.*' => 'exists:tags,id',
        ]);

        $project = Project::findOrFail($id);
        $project->title = $validatedData['title'];
        $project->description = $validatedData['description'];
        $project->category_id = $validatedData['category_id'];
        $project->save();

        if ($request->has('delete_images')) {
            $deleteImages = $request->input('delete_images');
            $project->images()->whereIn('id', $deleteImages)->delete();
        }
        
        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
        
                $project->images()->create([
                    'path' => $imageName,
                ]);
            }
        }

        // Verwijder alle bestaande tags van het project
        $project->tags()->detach();

        if ($request->has('tag_ids')) {
            foreach ($validatedData['tag_ids'] as $tagId) {
                $project->tags()->attach($tagId);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->images()->delete();
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }

}

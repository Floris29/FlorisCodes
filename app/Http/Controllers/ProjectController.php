<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('pages/projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CRUD.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valideer de ingevoerde gegevens, inclusief de afbeelding
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB en alleen afbeeldingen
        ]);
    
        // Sla de afbeelding op in de 'public/projects' map
        $path = $request->file('image')->store('projects', 'public');
    
        // Maak een nieuw project aan met de naam, beschrijving en afbeelding
        $project = new Project();
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->image_path = $path;  // Sla het afbeeldingspad op in de database
        $project->save();
    
        // Redirect naar een gewenste route, bijvoorbeeld de index-pagina
        return redirect()->route('projects.index')->with('success', 'Project successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}

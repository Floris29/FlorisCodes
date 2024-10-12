<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages/projects', compact('projects'));
    }

    public function create()
    {
        return view('CRUD.Create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('image')->store('projects', 'public');

        $project = new Project();
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->image_path = $path;
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        $project = Project::find($project->id);
        return view('CRUD.Edit', compact('project'));

    }

    public function update(Request $request, Project $project)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $project->image_path = $path;
        }

        $project->name = $request->input('name');
        $project->description = $request->input('description');

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project successfully updated!');
    }

    public function destroy(Project $project)
    {
        $project = Project::find($project->id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project successfully deleted!');
    }
}

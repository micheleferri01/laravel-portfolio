<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Typology;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typologies = Typology::all();
        $technologies = Technology::all();
        return view('projects.create', compact('typologies', 'technologies'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();
        $newProject->name = $data['name'];
        $newProject->author = $data['author'];
        $newProject->client = $data['client'];
        $newProject->typology_id = $data['typology_id'];
        $newProject-> resume = $data['resume'];        
        $newProject->save();
        $newProject->technology()->attach($data['technologies']);

        return redirect()->route('projects.show', $newProject);

    }
        
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $typologies = Typology::all();
        $technologies = Technology::all();
        return view('projects.edit', compact('project', 'typologies', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->name = $data['name'];
        $project->author = $data['author'];
        $project->client = $data['client'];
        $project->typology_id = $data['typology_id'];
        $project->resume = $data['resume'];
        $project->update();
        $project->technology()->sync($data['technologies']);

        return redirect()->route('projects.show', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect()->route('projects.index');
    }
}

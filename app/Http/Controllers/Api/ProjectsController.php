<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::with('typology')->get();
        return response()->json([
            'success' => true,
            'data' => $projects]);
    }

    public function show(Project $project)
    {
        $project->load('typology', 'technology');
        return response()->json([
            'success'=> true,
            'data'=> $project
        ]);
    }
}

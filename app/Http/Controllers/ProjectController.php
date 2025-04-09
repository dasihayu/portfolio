<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('technologies')
            ->latest()
            ->paginate(6); // Show 6 projects per page
        
        return view('pages.projects.index', compact('projects'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', 'active')->take(3)->get();
        return view('home', compact('projects'));
    }

    public function projects()
    {
        $projects = Project::where('status', 'active')->get();
        return view('projects', compact('projects'));
    }
}

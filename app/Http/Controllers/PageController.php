<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Blog;
use App\Models\HeroSection;
use App\Models\Project;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $projects = Project::latest()
            ->take(3)
            ->get();
        
        $blogs = Blog::where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        $testimonials = Testimoni::where('is_active', 1)
            ->latest()
            ->take(3)
            ->get();

        $hero = HeroSection::first();
        $about = AboutSection::first();
        return view('welcome', compact('projects', 'blogs', 'hero', 'about', 'testimonials'));
    }
}

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

        if ($testimonials->isEmpty()) {
            $testimonials = collect([
                [
                    'name' => 'John Smith',
                    'position' => 'CEO, Tech Solutions',
                    'content' => 'Working with Dasihayu was a great experience. Their attention to detail and technical expertise helped us deliver our project on time and with excellent quality.',
                    'rating' => 5,
                    'image' => 'https://placehold.co/100x100',
                ],
                [
                    'name' => 'Sarah Johnson',
                    'position' => 'Product Manager, StartupX',
                    'content' => 'The web application developed by Dasihayu exceeded our expectations. Their ability to understand our needs and translate them into a functional product was impressive.',
                    'rating' => 5,
                    'image' => 'https://placehold.co/100x100',
                ],
                [
                    'name' => 'Michael Brown',
                    'position' => 'Founder, Digital Agency',
                    'content' => 'Highly recommended! Dasihayu brings both technical expertise and creative problem-solving to the table. They delivered our project ahead of schedule.',
                    'rating' => 5,
                    'image' => 'https://placehold.co/100x100',
                ]
            ]);
        }

        $hero = HeroSection::first();
        $about = AboutSection::first();
        return view('welcome', compact('projects', 'blogs', 'hero', 'about', 'testimonials'));
    }
}

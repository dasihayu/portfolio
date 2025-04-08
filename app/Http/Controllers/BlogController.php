<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::query()
            ->when($request->category, function ($query, $category) {
                return $query->whereHas('categories', function ($q) use ($category) {
                    $q->where('slug', $category);
                });
            })
            ->where('status', 'published')
            ->latest()
            ->paginate(9);

        $categories = Category::all();

        return view('pages.blogs.index', compact('blogs', 'categories'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('pages.blogs.show', compact('blog'));
    }
}

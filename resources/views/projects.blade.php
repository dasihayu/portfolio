@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 h-screen">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">My Projects</h1>
            <p class="text-xl text-gray-600">A collection of my recent work and projects</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
                <div class="group bg-white rounded-lg shadow-lg overflow-hidden h-full">
                    <div class="relative overflow-hidden aspect-video">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 
                         transition-opacity duration-300 flex items-center justify-center gap-4">
                            @if ($project->live_url)
                                <a href="{{ $project->live_url }}"
                                    class="px-6 py-2 bg-white text-black rounded-full font-semibold hover:bg-gray-100 transition-colors"
                                    target="_blank">
                                    Live Demo
                                </a>
                            @endif
                            @if ($project->github_url)
                                <a href="{{ $project->github_url }}"
                                    class="px-6 py-2 bg-white text-black rounded-full font-semibold hover:bg-gray-100 transition-colors"
                                    target="_blank">
                                    <i class="fab fa-github mr-1"></i> Code
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg md:text-xl font-bold">{{ $project->name }}</h3>
                            <span
                                class="px-3 py-1 bg-gray-100 text-sm rounded-full 
                            {{ $project->status === 'active'
                                ? 'text-green-600'
                                : ($project->status === 'completed'
                                    ? 'text-blue-600'
                                    : 'text-gray-600') }}">
                                {{ ucfirst($project->status) }}
                            </span>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">{{ $project->description }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($project->categories as $category)
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">
                                    {{ $category->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

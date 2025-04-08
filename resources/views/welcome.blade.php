@extends('layouts.app')

@section('title', 'Welcome to My Portfolio')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Hero Section -->
        <section class="py-20">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                        Hi, I'm John Doe
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        A passionate Full Stack Developer crafting beautiful and functional web experiences
                    </p>
                    <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700">
                        View My Work
                    </button>
                </div>
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400" alt="Hero Image" class="rounded-lg shadow-lg">
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="py-20">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://placehold.co/400x300" alt="Project 1" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Project Name</h3>
                        <p class="text-gray-600">Brief project description goes here.</p>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://placehold.co/400x300" alt="Project 2" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Project Name</h3>
                        <p class="text-gray-600">Brief project description goes here.</p>
                    </div>
                </div>
                <!-- Project Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://placehold.co/400x300" alt="Project 3" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Project Name</h3>
                        <p class="text-gray-600">Brief project description goes here.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

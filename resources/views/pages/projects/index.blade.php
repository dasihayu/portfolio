@extends('layouts.app')

@section('content')
    <section
        class="pt-32 sm:pt-40 pb-16 bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <span
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-50/50 dark:bg-blue-900/30 rounded-full border border-blue-100 dark:border-blue-800/50 backdrop-blur-sm">
                    My Work
                </span>
                <h1
                    class="text-4xl sm:text-5xl font-bold bg-gradient-to-r from-gray-900 via-gray-700 to-gray-900 dark:from-white dark:via-gray-300 dark:to-white bg-clip-text text-transparent">
                    Featured Projects
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Here are some of my recent projects that showcase my skills and experience in web development.
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($projects as $project)
                    <div
                        class="group bg-white/80 dark:bg-gray-800/80 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500 hover:-translate-y-1 backdrop-blur-sm border border-gray-100 dark:border-gray-700">
                        <!-- Project Image -->
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $project->image_url) }}" alt="{{ $project->name }}"
                                class="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-500">

                            <!-- Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end justify-between p-6">
                                <div class="flex gap-3">
                                    @if ($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank"
                                            class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-lg transition-all duration-300 flex items-center gap-2 text-sm">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                            Live Demo
                                        </a>
                                    @endif
                                    @if ($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank"
                                            class="bg-gray-800 hover:bg-gray-900 text-white p-2 rounded-lg transition-all duration-300 flex items-center gap-2 text-sm">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                            </svg>
                                            Code
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ $project->name }}</h3>
                            <p class="text-gray-600 dark:text-gray-400">{{ $project->description }}</p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 pt-2">
                                @foreach ($project->technologies as $technology)
                                    <span
                                        class="px-3 py-1 text-sm font-medium bg-blue-100/80 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full backdrop-blur-sm">
                                        {{ $technology->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div
                            class="text-center py-12 px-4 bg-white/80 dark:bg-gray-800/80 rounded-2xl backdrop-blur-sm border border-gray-100 dark:border-gray-700">
                            <svg class="w-16 h-16 mx-auto text-gray-400 dark:text-gray-600 mb-4" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">No Projects Yet</h3>
                            <p class="text-gray-600 dark:text-gray-400">Check back later for exciting new projects!</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($projects->hasPages())
                <div class="mt-12">
                    {{ $projects->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection

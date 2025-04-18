<section class="py-12 sm:py-16 lg:py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12 sm:mb-16 space-y-4">
            <span class="text-blue-600 dark:text-blue-400 font-medium text-sm sm:text-base">My Work</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white">Featured Projects</h2>
            <p class="text-base sm:text-lg lg:text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Here are some of my recent projects that showcase my skills and experience in web development.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Project Card -->
            @foreach ($projects as $project)
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <div class="relative group">
                        <img src="{{ asset('storage/' . $project->image_url) }}" alt="{{ $project->name }}"
                            class="w-full h-40 sm:h-48 object-cover">
                        <div
                            class="absolute inset-0 bg-blue-600 bg-opacity-75 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="flex gap-3 sm:gap-4">
                                @if ($project->demo_url)
                                    <a href="{{ $project->demo_url }}" target="_blank"
                                        class="bg-white p-2 sm:p-3 rounded-full hover:bg-gray-100 transition duration-300">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($project->github_url)
                                    <a href="{{ $project->github_url }}" target="_blank"
                                        class="bg-white p-2 sm:p-3 rounded-full hover:bg-gray-100 transition duration-300">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path
                                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $project->name }}
                        </h3>
                        <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-4">
                            {{ $project->description }}</p>
                        <div class="flex flex-wrap gap-1.5 sm:gap-2">
                            @foreach ($project->technologies as $technology)
                                <span
                                    class="px-2 sm:px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-xs sm:text-sm">
                                    {{ $technology->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

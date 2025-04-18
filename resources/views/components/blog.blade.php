<section class="py-12 sm:py-16 lg:py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12 sm:mb-16 space-y-4">
            <span class="text-blue-600 dark:text-blue-400 font-medium text-sm sm:text-base">Latest Articles</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white">From My Blog</h2>
            <p class="text-base sm:text-lg lg:text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Insights, tutorials, and thoughts about web development and technology.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @forelse($blogs as $blog)
                <article
                    class="bg-gray-50 dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg dark:shadow-gray-900 hover:shadow-xl transition duration-300">
                    <div class="relative">
                        @if ($blog->featured_image)
                            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                                class="w-full h-40 sm:h-48 object-cover">
                        @endif
                        @if ($blog->categories->isNotEmpty())
                            <div class="absolute top-3 sm:top-4 left-3 sm:left-4 flex flex-wrap gap-1.5 sm:gap-2">
                                @foreach ($blog->categories as $category)
                                    <span
                                        class="bg-blue-600 dark:bg-blue-500 text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="p-4 sm:p-6">
                        <div
                            class="flex items-center gap-1.5 sm:gap-2 text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $blog->created_at->format('F j, Y') }}</span>
                        </div>

                        <h2 class="font-bold text-lg sm:text-xl text-gray-900 dark:text-white mb-2">
                            <a href="{{ route('blogs.show', $blog->slug) }}"
                                class="hover:text-blue-600 dark:hover:text-blue-400 transition duration-300">
                                {{ $blog->title }}
                            </a>
                        </h2>

                        <div class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                            @if ($blog->excerpt)
                                {{ $blog->excerpt }}
                            @else
                                {!! Str::limit(strip_tags($blog->content), 150) !!}
                            @endif
                        </div>

                        <a href="{{ route('blogs.show', $blog->slug) }}"
                            class="inline-flex items-center text-sm sm:text-base text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-500 font-medium">
                            Read More
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 ml-1.5 sm:ml-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-6 sm:py-8">
                    <p class="text-gray-500 dark:text-gray-400 text-sm sm:text-base">No blog posts found.</p>
                </div>
            @endforelse
        </div>

        <!-- View All Button -->
        <div class="text-center mt-8 sm:mt-12">
            <a href="{{ route('blogs.index') }}"
                class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 text-sm sm:text-base border-2 border-blue-600 dark:border-blue-400 text-blue-600 dark:text-blue-400 font-medium rounded-lg hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition duration-300">
                View All Articles
                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 ml-1.5 sm:ml-2" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>

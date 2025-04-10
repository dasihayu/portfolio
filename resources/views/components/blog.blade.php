<section class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16 space-y-4">
            <span class="text-blue-600 dark:text-blue-400 font-medium">Latest Articles</span>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white">From My Blog</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Insights, tutorials, and thoughts about web development and technology.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($blogs as $blog)
                <article
                    class="bg-gray-50 dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg dark:shadow-gray-900 hover:shadow-xl transition duration-300">
                    <div class="relative">
                        @if ($blog->featured_image)
                            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                                class="w-full h-48 object-cover">
                        @endif
                        @if ($blog->categories->isNotEmpty())
                            <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                                @foreach ($blog->categories as $category)
                                    <span
                                        class="bg-blue-600 dark:bg-blue-500 text-white px-3 py-1 rounded-full text-sm">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $blog->created_at->format('F j, Y') }}</span>
                        </div>

                        <h2 class="font-bold text-xl text-gray-900 dark:text-white mb-2">
                            <a href="{{ route('blogs.show', $blog->slug) }}"
                                class="hover:text-blue-600 dark:hover:text-blue-400 transition duration-300">
                                {{ $blog->title }}
                            </a>
                        </h2>

                        <div class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                            @if ($blog->excerpt)
                                {{ $blog->excerpt }}
                            @else
                                {!! Str::limit(strip_tags($blog->content), 150) !!}
                            @endif
                        </div>

                        <a href="{{ route('blogs.show', $blog->slug) }}"
                            class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-500 font-medium">
                            Read More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500 dark:text-gray-400">No blog posts found.</p>
                </div>
            @endforelse
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="{{ route('blogs.index') }}"
                class="inline-flex items-center px-8 py-4 border-2 border-blue-600 dark:border-blue-400 text-blue-600 dark:text-blue-400 font-medium rounded-lg hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition duration-300">
                View All Articles
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>

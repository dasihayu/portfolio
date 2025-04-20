@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    <section
        class="pt-32 sm:pt-40 pb-16 bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center mb-16 space-y-4">
                <span
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-50/50 dark:bg-blue-900/30 rounded-full border border-blue-100 dark:border-blue-800/50 backdrop-blur-sm">
                    Latest Articles
                </span>
                <h1
                    class="text-4xl sm:text-5xl font-bold bg-gradient-to-r from-gray-900 via-gray-700 to-gray-900 dark:from-white dark:via-gray-300 dark:to-white bg-clip-text text-transparent">
                    From My Blog
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Discover insights, tutorials, and thoughts about web development, design, and technology.
                </p>
            </div>

            <!-- Categories -->
            <div class="flex flex-wrap gap-3 justify-center mb-12">
                <a href="{{ route('blogs.index') }}"
                    class="px-5 py-2.5 rounded-xl {{ !request('category') ? 'bg-blue-600 dark:bg-blue-500 text-white shadow-lg shadow-blue-500/25' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700' }} hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition-all duration-300 hover:-translate-y-0.5">
                    All Posts
                </a>
                @foreach ($categories as $category)
                    <a href="{{ route('blogs.index', ['category' => $category->slug]) }}"
                        class="px-5 py-2.5 rounded-xl {{ request('category') == $category->slug ? 'bg-blue-600 dark:bg-blue-500 text-white shadow-lg shadow-blue-500/25' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700' }} hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition-all duration-300 hover:-translate-y-0.5">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($blogs as $blog)
                    <article
                        class="group bg-white/80 dark:bg-gray-800/80 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500 hover:-translate-y-1 backdrop-blur-sm border border-gray-100 dark:border-gray-700">
                        <!-- Project Image -->
                        <div class="relative overflow-hidden">
                            @if ($blog->featured_image)
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                                    class="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-500">
                            @endif
                            @if ($blog->categories->isNotEmpty())
                                <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                                    @foreach ($blog->categories as $category)
                                        <span
                                            class="px-3 py-1.5 bg-blue-600/90 backdrop-blur-sm text-white text-sm font-medium rounded-lg">
                                            {{ $category->name }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div class="p-6 space-y-4">
                            <div class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ $blog->created_at->format('F j, Y') }}</span>
                            </div>

                            <h3 class="font-bold text-xl text-gray-900 dark:text-white">
                                <a href="{{ route('blogs.show', $blog->slug) }}"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                                    {{ $blog->title }}
                                </a>
                            </h3>

                            <div class="text-gray-600 dark:text-gray-400 line-clamp-3">
                                @if ($blog->excerpt)
                                    {{ $blog->excerpt }}
                                @else
                                    {!! Str::limit(strip_tags($blog->content), 150) !!}
                                @endif
                            </div>

                            <a href="{{ route('blogs.show', $blog->slug) }}"
                                class="group inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-500 font-medium">
                                Read More
                                <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full">
                        <div
                            class="text-center py-12 px-4 bg-white/80 dark:bg-gray-800/80 rounded-2xl backdrop-blur-sm border border-gray-100 dark:border-gray-700">
                            <svg class="w-16 h-16 mx-auto text-gray-400 dark:text-gray-600 mb-4" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">No Blog Posts Yet</h3>
                            <p class="text-gray-600 dark:text-gray-400">Check back later for new content.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-16">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
@endsection

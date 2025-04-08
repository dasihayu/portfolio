@extends('layouts.app')

@section('title', $blog->title)

@section('content')
    <article class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Back to Blog -->
            <div class="max-w-4xl mx-auto mb-8">
                <a href="{{ route('blogs.index') }}"
                    class="inline-flex items-center text-gray-600 hover:text-blue-600 transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Blog
                </a>
            </div>

            <!-- Header -->
            <div class="max-w-4xl mx-auto mb-12">
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach ($blog->categories as $category)
                        <a href="{{ route('blogs.index', ['category' => $category->slug]) }}"
                            class="px-4 py-1.5 bg-blue-100 text-blue-600 rounded-full text-sm font-medium hover:bg-blue-200 transition">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>

                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $blog->title }}
                </h1>

                <div class="flex items-center gap-6 text-gray-600">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <time datetime="{{ $blog->created_at->format('Y-m-d') }}">
                            {{ $blog->created_at->format('F j, Y') }}
                        </time>
                    </div>
                </div>
            </div>

            @if ($blog->featured_image)
                <div class="max-w-4xl mx-auto mb-16">
                    <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                        class="w-full aspect-video object-cover rounded-2xl shadow-xl">
                </div>
            @endif

            <!-- Content -->
            <div class="max-w-4xl mx-auto">
                <div
                    class="prose prose-lg max-w-none prose-headings:text-gray-900 prose-headings:font-bold prose-p:text-gray-600 prose-a:text-blue-600 prose-a:no-underline hover:prose-a:text-blue-700 prose-img:rounded-xl prose-img:shadow-lg mb-12">
                    {!! $blog->content !!}
                </div>

                <!-- Share Links -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Share this article</h3>
                    <div class="flex gap-4">
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode(request()->url()) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-4 py-2 bg-gray-100 text-gray-600 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                            <span>Share on Twitter</span>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($blog->title) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-4 py-2 bg-gray-100 text-gray-600 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                            <span>Share on LinkedIn</span>
                        </a>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="mt-12 pt-8 border-t border-gray-200">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        @if ($previousPost = $blog->previous())
                            <a href="{{ route('blogs.show', $previousPost->slug) }}"
                                class="group p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition">
                                <span class="block text-sm text-gray-600 mb-2">← Previous Article</span>
                                <span
                                    class="text-lg font-medium text-gray-900 group-hover:text-blue-600 transition line-clamp-2">
                                    {{ $previousPost->title }}
                                </span>
                            </a>
                        @endif

                        @if ($nextPost = $blog->next())
                            <a href="{{ route('blogs.show', $nextPost->slug) }}"
                                class="group p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition sm:text-right">
                                <span class="block text-sm text-gray-600 mb-2">Next Article →</span>
                                <span
                                    class="text-lg font-medium text-gray-900 group-hover:text-blue-600 transition line-clamp-2">
                                    {{ $nextPost->title }}
                                </span>
                            </a>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </article>
@endsection

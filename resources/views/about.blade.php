@extends('layouts.app')

@section('title', 'About Me - Dasihayu')

@section('content')
    <!-- Hero Section -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <!-- Left Content -->
                <div class="w-full md:w-1/2 space-y-6">
                    <h1 class="text-4xl md:text-5xl font-bold">About Me</h1>
                    <div class="w-20 h-1 bg-black"></div>
                    <p class="text-gray-600 text-lg">
                        Hi! I'm Dasihayu, a passionate Fullstack Developer based in Jakarta, Indonesia.
                        With 3 years of experience in web development, I enjoy creating elegant solutions
                        to complex problems.
                    </p>
                </div>
                <!-- Right Image -->
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('images/profile.JPG') }}" alt="Profile Picture"
                        class="rounded-lg shadow-lg w-full max-w-md mx-auto" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-12 md:py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Experience</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Experience Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold">Senior Web Developer</h3>
                        <span class="text-gray-600">2022 - Present</span>
                    </div>
                    <p class="text-gray-600 mb-4">Company Name</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Led development of multiple web applications</li>
                        <li>Implemented modern frontend frameworks</li>
                        <li>Optimized backend performance</li>
                    </ul>
                </div>

                <!-- Experience Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold">Web Developer</h3>
                        <span class="text-gray-600">2020 - 2022</span>
                    </div>
                    <p class="text-gray-600 mb-4">Previous Company</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Developed responsive websites</li>
                        <li>Collaborated with design team</li>
                        <li>Maintained existing web applications</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Skills & Technologies</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                <!-- PHP/Laravel -->
                <div class="bg-white p-6 rounded-lg shadow text-center space-y-3 hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="font-semibold block">PHP/Laravel</span>
                </div>

                <!-- JavaScript -->
                <div class="bg-white p-6 rounded-lg shadow text-center space-y-3 hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span class="font-semibold block">JavaScript</span>
                </div>

                <!-- Vue.js -->
                <div class="bg-white p-6 rounded-lg shadow text-center space-y-3 hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                    <span class="font-semibold block">Vue.js</span>
                </div>

                <!-- React -->
                <div class="bg-white p-6 rounded-lg shadow text-center space-y-3 hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                    </svg>
                    <span class="font-semibold block">React</span>
                </div>

                <!-- MySQL -->
                <div class="bg-white p-6 rounded-lg shadow text-center space-y-3 hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                    <span class="font-semibold block">MySQL</span>
                </div>

                <!-- Tailwind CSS -->
                <div class="bg-white p-6 rounded-lg shadow text-center space-y-3 hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                    <span class="font-semibold block">Tailwind CSS</span>
                </div>

                <!-- Git -->
                <div class="bg-white p-6 rounded-lg shadow text-center space-y-3 hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="font-semibold block">Git</span>
                </div>

                <!-- Docker -->
                <div class="bg-white p-6 rounded-lg shadow text-center space-y-3 hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    <span class="font-semibold block">Docker</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-12 md:py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Education</h2>
            <div class="max-w-3xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold">Bachelor of Computer Science</h3>
                        <span class="text-gray-600">2016 - 2020</span>
                    </div>
                    <p class="text-gray-600">University Name</p>
                </div>
            </div>
        </div>
    </section>
@endsection

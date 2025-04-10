@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- About Header -->
        <div class=" mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">About Me</h1>
                <p class="text-xl text-gray-600">Full Stack Developer based in Semarang, Indonesia</p>
            </div>

            <!-- Profile Section -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-gray-900">Hey, I'm Dasi Hayu</h2>
                    <div class="prose prose-lg text-gray-600">
                        <p>A passionate Full Stack Developer with expertise in building modern web applications. I specialize in Laravel, Vue.js, and other cutting-edge technologies.</p>
                        <p>With 2+ years of experience in web development, I focus on creating clean, efficient, and user-friendly solutions that solve real-world problems.</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">
                            Download Resume
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="inline-flex items-center px-6 py-3 border-2 border-blue-600 text-blue-600 font-medium rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">
                            Connect on LinkedIn
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/profile.jpg') }}" alt="Profile Picture" class="rounded-2xl w-full shadow-xl">
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-lg p-6">
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-3xl font-bold text-blue-600">2+</div>
                                <div class="text-sm text-gray-600">Years Experience</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-blue-600">10+</div>
                                <div class="text-sm text-gray-600">Projects</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Skills & Technologies</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Frontend -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Frontend Development</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['HTML/CSS', 'JavaScript', 'Vue.js', 'React', 'TailwindCSS'] as $skill)
                                <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Backend -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Backend Development</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['PHP', 'Laravel', 'MySQL', 'API Development', 'Node.js'] as $skill)
                                <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Tools -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Tools & Others</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Git', 'Docker', 'AWS', 'Linux', 'Agile'] as $skill)
                                <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Experience</h2>
                <div class="space-y-8">
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Full Stack Developer</h3>
                                <p class="text-gray-600">Freelance</p>
                            </div>
                            <span class="text-sm text-gray-500">2022 - Present</span>
                        </div>
                        <p class="text-gray-600">Building modern web applications for clients using Laravel, Vue.js, and other cutting-edge technologies.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Web Developer</h3>
                                <p class="text-gray-600">Tech Company</p>
                            </div>
                            <span class="text-sm text-gray-500">2021 - 2022</span>
                        </div>
                        <p class="text-gray-600">Developed and maintained web applications using Laravel and Vue.js. Collaborated with team members to deliver high-quality solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
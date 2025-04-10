@extends('layouts.app')

@section('content')
    <section class="py-16 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <!-- About Header -->
            <div class="mx-auto">
                <div class="text-center mb-16">
                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">About Me</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Full Stack Developer based in Semarang, Indonesia</p>
                </div>

                <!-- Profile Section -->
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div class="space-y-6">
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Hey, I'm Dasi Hayu</h2>
                        <div class="prose prose-lg text-gray-600 dark:text-gray-400">
                            <p>A passionate Full Stack Developer with expertise in building modern web applications. I
                                specialize in Laravel, Vue.js, and other cutting-edge technologies.</p>
                            <p>With 2+ years of experience in web development, I focus on creating clean, efficient, and
                                user-friendly solutions that solve real-world problems.</p>
                        </div>
                        <div class="flex gap-4">
                            <a href="https://github.com/dasihayu" target="_blank"
                                class="inline-flex items-center px-6 py-3 bg-blue-600 dark:bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition duration-300">
                                Visit GitHub
                                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/in/dasi-hayupermana-b96882263/" target="_blank"
                                class="inline-flex items-center px-6 py-3 border-2 border-blue-600 dark:border-blue-400 text-blue-600 dark:text-blue-400 font-medium rounded-lg hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition duration-300">
                                Connect on LinkedIn
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('assets/profile.jpg') }}" alt="Profile Picture"
                            class="rounded-2xl w-full shadow-xl dark:shadow-blue-500/20">
                        <div class="absolute -bottom-6 -right-6 bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6">
                            <div class="grid grid-cols-2 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">2+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">10+</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skills Section -->
                <div class="mb-20">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Skills & Technologies</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Frontend -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Frontend Development</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach (['HTML/CSS', 'JavaScript', 'Vue.js', 'React', 'TailwindCSS'] as $skill)
                                    <span
                                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Backend -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Backend Development</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach (['PHP', 'Laravel', 'MySQL', 'Node.js'] as $skill)
                                    <span
                                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Tools -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Tools & Others</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach (['Git', 'Docker', 'Linux', 'Figma', 'Postman'] as $skill)
                                    <span
                                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Experience</h2>
                    <div class="space-y-8">
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Full Stack Developer</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Freelance</p>
                                </div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">2022 - Present</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">Building modern web applications for clients using
                                Laravel, Vue.js, and other cutting-edge technologies.</p>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Web Developer</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Tech Company</p>
                                </div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">2021 - 2022</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">Developed and maintained web applications using
                                Laravel and Vue.js. Collaborated with team members to deliver high-quality solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

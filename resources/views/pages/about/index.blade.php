@extends('layouts.app')

@section('content')
    <section
        class="pt-32 sm:pt-40 pb-16 bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <!-- About Header -->
            <div class="mx-auto max-w-7xl">
                <div class="text-center mb-16 space-y-4">
                    <span
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-50/50 dark:bg-blue-900/30 rounded-full border border-blue-100 dark:border-blue-800/50 backdrop-blur-sm">
                        About Me
                    </span>
                    <h1
                        class="text-4xl sm:text-5xl font-bold bg-gradient-to-r from-gray-900 via-gray-700 to-gray-900 dark:from-white dark:via-gray-300 dark:to-white bg-clip-text text-transparent">
                        Full Stack Developer
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Based in Semarang, Indonesia</p>
                </div>

                <!-- Profile Section -->
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div class="space-y-8">
                        <div class="prose prose-lg text-gray-600 dark:text-gray-400 max-w-none">
                            <p class="text-lg sm:text-xl leading-relaxed">
                                A passionate Full Stack Developer with expertise in building modern web applications.
                                I specialize in Laravel, Vue.js, and other cutting-edge technologies.
                            </p>
                            <p class="text-lg sm:text-xl leading-relaxed">
                                With 2+ years of experience in web development, I focus on creating clean, efficient,
                                and user-friendly solutions that solve real-world problems.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <!-- GitHub Button -->
                            <a href="https://github.com/dasihayu" target="_blank" rel="noopener noreferrer"
                                class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-gray-900 to-gray-700 dark:from-blue-600 dark:to-blue-500 text-white font-medium rounded-xl hover:shadow-lg hover:shadow-gray-500/25 dark:hover:shadow-blue-500/25 hover:-translate-y-0.5 transition-all duration-300">
                                <span class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                    </svg>
                                    <span class="relative">
                                        Visit GitHub
                                        <span
                                            class="absolute -bottom-1 left-0 w-full h-[2px] bg-white transform origin-left scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                                    </span>
                                </span>
                                <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>

                            <!-- LinkedIn Button -->
                            <a href="https://www.linkedin.com/in/dasi-hayupermana-b96882263/" target="_blank"
                                rel="noopener noreferrer"
                                class="group relative inline-flex items-center px-6 py-3 bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 text-gray-800 dark:text-gray-200 font-medium rounded-xl hover:-translate-y-0.5 transition-all duration-300">
                                <span class="flex items-center relative z-10">
                                    <svg class="w-5 h-5 mr-2 text-blue-600 dark:text-blue-400" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                    <span class="relative">
                                        Connect on LinkedIn
                                        <span
                                            class="absolute -bottom-1 left-0 w-full h-[2px] bg-blue-600 dark:bg-blue-400 transform origin-left scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                                    </span>
                                </span>
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-800/30 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <div
                            class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-purple-500 to-blue-600 opacity-10 blur-3xl rounded-full animate-gradient">
                        </div>
                        <img src="{{ asset('assets/profile.jpg') }}" alt="Profile Picture"
                            class="relative rounded-2xl w-full shadow-xl dark:shadow-blue-500/20 hover:-translate-y-2 transition duration-500">
                        <div
                            class="absolute -bottom-6 -right-6 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-gray-100 dark:border-gray-700">
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

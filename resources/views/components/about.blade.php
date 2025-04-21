<section
    class="py-20 bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">
            <!-- Left Column - Image -->
            <div class="lg:w-1/3 flex justify-center lg:justify-start">
                <div class="relative group">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-purple-500 to-blue-600 rounded-2xl opacity-10 blur-3xl group-hover:opacity-20 transition duration-500">
                    </div>
                    <img src="{{ asset('assets/profile.jpg') }}" alt="Profile Image"
                        class="relative rounded-2xl shadow-xl w-[280px] sm:w-[320px] lg:w-3/4 group-hover:scale-[1.02] transition duration-500 dark:shadow-blue-500/20">
                </div>
            </div>

            <!-- Right Column - Content -->
            <div class="lg:w-2/3 space-y-6">
                <div class="space-y-4">
                    <span
                        class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-50/50 dark:bg-blue-900/30 rounded-full border border-blue-100 dark:border-blue-800/50 backdrop-blur-sm">
                        About Me
                    </span>
                    <h2 class="text-4xl font-bold dark:text-white">
                        Passionate Developer &
                        <span
                            class="bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                            Creative Problem Solver
                        </span>
                    </h2>
                </div>

                <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                    With over 2 years of experience in web development, I specialize in creating
                    user-centric applications that solve real-world problems. My journey in
                    technology began with a curiosity about how things work, which evolved into
                    a passion for building innovative solutions.
                </p>

                <!-- Skills Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-6">
                    @foreach ([
        ['title' => 'Frontend', 'skills' => 'React, Vue, TailwindCSS', 'icon' => 'M7 8l5 5 5-5M7 12l5 5 5-5M7 16l5 5 5-5'],
        ['title' => 'Backend', 'skills' => 'Laravel, Node.js', 'icon' => 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4'],
        ['title' => 'Database', 'skills' => 'MySQL, PostgreSQL, MongoDB', 'icon' => 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4'],
        ['title' => 'DevOps', 'skills' => 'Docker, CI/CD', 'icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'],
        ['title' => 'Tools', 'skills' => 'Git, VS Code, Figma', 'icon' => 'M11 4a2 2 0 114 0v1a1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z'],
        ['title' => 'Soft Skills', 'skills' => 'Communication, Leadership', 'icon' => 'M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z'],
    ] as $skill)
                        <div
                            class="group bg-white/80 dark:bg-gray-800/80 p-5 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 hover:-translate-y-1 backdrop-blur-sm border border-gray-100 dark:border-gray-700">
                            <div class="flex items-center gap-4 mb-3">
                                <div
                                    class="p-2 bg-blue-50 dark:bg-blue-900/30 rounded-lg group-hover:bg-blue-100 dark:group-hover:bg-blue-900/50 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="{{ $skill['icon'] }}" />
                                    </svg>
                                </div>
                                <h3 class="font-bold text-gray-900 dark:text-white">{{ $skill['title'] }}</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400">{{ $skill['skills'] }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 pt-8">
                    @foreach ([['count' => '2+', 'label' => 'Years Experience'], ['count' => '10+', 'label' => 'Projects Completed'], ['count' => '3', 'label' => 'Happy Clients']] as $stat)
                        <div
                            class="group relative bg-white/80 dark:bg-gray-800/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 hover:-translate-y-1 backdrop-blur-sm border border-gray-100 dark:border-gray-700 text-center">
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl opacity-0 group-hover:opacity-10 transition duration-300">
                            </div>
                            <span
                                class="relative block text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent mb-2">
                                {{ $stat['count'] }}
                            </span>
                            <span class="relative text-sm text-gray-600 dark:text-gray-400">
                                {{ $stat['label'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

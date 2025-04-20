<section class="min-h-screen bg-white dark:bg-gray-900 flex items-center relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-grid-gray-100 dark:bg-grid-gray-800 opacity-20"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16">
            <!-- Text Content -->
            <div class="lg:w-1/2 space-y-6 sm:space-y-8 text-center lg:text-left">
                <div class="space-y-4 animate-fade-in-up">
                    <span
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-medium text-sm">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Available for new projects
                    </span>

                    <h1
                        class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-gray-900 dark:text-white leading-tight">
                        Hi, I'm Dasi Hayu
                        <span
                            class="block mt-2 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-400 bg-clip-text text-transparent">
                            Full Stack Developer
                        </span>
                    </h1>

                    <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto lg:mx-0">
                        Transforming ideas into elegant, high-performance web applications
                        with modern technologies and clean code practices.
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-fade-in-up"
                    style="animation-delay: 200ms">
                    <a href="{{ route('projects.index') }}"
                        class="inline-flex items-center justify-center px-8 py-4 rounded-lg bg-blue-600 text-white font-medium transition-all duration-300 hover:bg-blue-700 hover:scale-105 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                        View Projects
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('contact.index') }}"
                        class="inline-flex items-center justify-center px-8 py-4 rounded-lg border-2 border-gray-800 dark:border-gray-300 text-gray-800 dark:text-gray-300 font-medium transition-all duration-300 hover:bg-gray-800 hover:text-white dark:hover:bg-gray-300 dark:hover:text-gray-900 hover:scale-105">
                        Let's Talk
                    </a>
                </div>

                <!-- Social Links -->
                <div class="flex items-center gap-6 justify-center lg:justify-start animate-fade-in-up"
                    style="animation-delay: 400ms">
                    <a href="https://github.com/dasihayu" target="_blank" rel="noopener noreferrer"
                        class="group p-2 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-all duration-300">
                        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/dasi-hayupermana-b96882263/" target="_blank"
                        rel="noopener noreferrer"
                        class="group p-2 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-all duration-300">
                        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.23 0H1.77C.8 0 0 .8 0 1.77v20.46C0 23.2.8 24 1.77 24h20.46c.98 0 1.77-.8 1.77-1.77V1.77C24 .8 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.7c-1.16 0-2.1-.94-2.1-2.1 0-1.16.94-2.1 2.1-2.1 1.16 0 2.1.94 2.1 2.1 0 1.16-.94 2.1-2.1 2.1zm14.63 12.4h-3.62v-5.67c0-1.35-.02-3.1-1.88-3.1-1.88 0-2.17 1.47-2.17 3v5.77h-3.62V9.24h3.48v1.6h.05c.48-.92 1.66-1.88 3.42-1.88 3.65 0 4.34 2.4 4.34 5.53v5.61z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="lg:w-1/2 flex justify-center lg:justify-end animate-fade-in" style="animation-delay: 600ms">
                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-blue-400 opacity-10 blur-3xl rounded-full">
                    </div>
                    <img src="{{ asset('assets/profile.jpg') }}" alt="Dasi Hayu"
                        class="relative w-[280px] sm:w-[320px] lg:w-[400px] rounded-2xl shadow-xl hover:shadow-2xl dark:shadow-blue-500/20 transition-all duration-500 hover:-translate-y-2">
                </div>
            </div>
        </div>
    </div>
</section>

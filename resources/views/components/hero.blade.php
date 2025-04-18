<section class="min-h-screen bg-gray-50 dark:bg-gray-900 flex items-center transition-colors duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-16">
            <!-- Text Content -->
            <div class="lg:w-1/2 space-y-4 sm:space-y-6 text-center lg:text-left">
                <span class="text-blue-600 dark:text-blue-400 font-medium text-sm sm:text-base">👋 Welcome to my
                    portfolio</span>
                <h1
                    class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 dark:text-white leading-tight">
                    Hi, I'm Dasi Hayu<br>
                    <span class="text-blue-600 dark:text-blue-400">Full Stack Developer</span>
                </h1>
                <p class="text-base sm:text-lg lg:text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto lg:mx-0">
                    Crafting digital experiences with clean code and elegant design.
                    Specialized in building modern web applications.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('projects.index') }}"
                        class="bg-blue-600 dark:bg-blue-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg hover:bg-gray-900 dark:hover:bg-gray-700 transition duration-300 font-medium text-sm sm:text-base">
                        View Projects
                    </a>
                    <a href="{{ route('contact.index') }}"
                        class="border-2 border-gray-800 dark:border-gray-300 text-gray-800 dark:text-gray-300 px-6 sm:px-8 py-3 sm:py-4 rounded-lg hover:bg-gray-800 dark:hover:bg-gray-700 hover:text-white transition duration-300 font-medium text-sm sm:text-base">
                        Contact Me
                    </a>
                </div>
                <!-- Social Links -->
                <div class="flex gap-6 pt-4 sm:pt-6 justify-center lg:justify-start">
                    <a href="https://github.com/dasihayu" target="blank"
                        class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition duration-300">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/dasi-hayupermana-b96882263/" target="blank"
                        class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition duration-300">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M22.23 0H1.77C.8 0 0 .8 0 1.77v20.46C0 23.2.8 24 1.77 24h20.46c.98 0 1.77-.8 1.77-1.77V1.77C24 .8 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.7c-1.16 0-2.1-.94-2.1-2.1 0-1.16.94-2.1 2.1-2.1 1.16 0 2.1.94 2.1 2.1 0 1.16-.94 2.1-2.1 2.1zm14.63 12.4h-3.62v-5.67c0-1.35-.02-3.1-1.88-3.1-1.88 0-2.17 1.47-2.17 3v5.77h-3.62V9.24h3.48v1.6h.05c.48-.92 1.66-1.88 3.42-1.88 3.65 0 4.34 2.4 4.34 5.53v5.61z" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="lg:w-1/2 hidden lg:flex lg:justify-end mt-8 lg:mt-0">
                <img src="{{ asset('assets/profile.jpg') }}" alt="Hero Image"
                    class="rounded-2xl shadow-2xl dark:shadow-blue-500/20 w-[280px] sm:w-[320px] lg:w-3/4 hover:scale-105 transition duration-500">
            </div>
        </div>
    </div>
</section>

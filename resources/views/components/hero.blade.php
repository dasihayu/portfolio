<section class="min-h-screen bg-white dark:bg-gray-900 flex items-center relative overflow-hidden">
    <!-- Dynamic Background -->
    <div class="absolute inset-0">  
        <div class="absolute inset-0 bg-grid-gray-100 dark:bg-grid-gray-800 opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/30 to-transparent dark:from-blue-900/10"></div>
        <!-- Animated Shapes -->
        <div class="absolute top-20 left-10 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-72 h-72 bg-purple-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16">
            <!-- Text Content with Enhanced Animations -->
            <div class="lg:w-1/2 space-y-8 text-center lg:text-left">
                <div class="space-y-6">
                    <span 
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-medium text-sm opacity-0 animate-fade-slide-down"
                        style="animation-delay: 200ms; animation-fill-mode: forwards;">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Available for new projects
                    </span>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-gray-900 dark:text-white leading-tight opacity-0 animate-fade-slide-down"
                        style="animation-delay: 400ms; animation-fill-mode: forwards;">
                        Hi, I'm Dasi Hayu
                        <span class="block mt-3 bg-gradient-to-r from-blue-600 via-purple-500 to-blue-400 bg-clip-text text-transparent">
                            Full Stack Developer
                        </span>
                    </h1>

                    <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto lg:mx-0 opacity-0 animate-fade-slide-down"
                        style="animation-delay: 600ms; animation-fill-mode: forwards;">
                        Transforming ideas into elegant, high-performance web applications
                        with modern technologies and clean code practices.
                    </p>
                </div>

                <!-- Action Buttons with Hover Effects -->
                <div class="flex flex-col sm:flex-row gap-5 justify-center lg:justify-start opacity-0 animate-fade-slide-down"
                    style="animation-delay: 800ms; animation-fill-mode: forwards;">
                    <a href="{{ route('projects.index') }}"
                        class="group inline-flex items-center justify-center px-8 py-4 rounded-lg bg-gradient-to-r from-blue-600 to-blue-500 text-white font-medium transition-all duration-300 hover:bg-gradient-to-r hover:from-blue-700 hover:to-blue-600 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/25 dark:hover:shadow-blue-400/20 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                        <span>View Projects</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('contact.index') }}"
                        class="group inline-flex items-center justify-center px-8 py-4 rounded-lg border-2 border-gray-800 dark:border-gray-300 text-gray-800 dark:text-gray-300 font-medium transition-all duration-300 hover:bg-gray-800 hover:text-white dark:hover:bg-gray-300 dark:hover:text-gray-900 hover:scale-105 hover:shadow-lg">
                        <span>Let's Talk</span>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="h-0 w-0 ml-0 transition-all duration-300 group-hover:h-5 group-hover:w-5 group-hover:ml-2" 
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </a>
                </div>

                <!-- Social Links with Interactive Effects -->
                <div class="flex items-center gap-6 justify-center lg:justify-start opacity-0 animate-fade-slide-down"
                    style="animation-delay: 1000ms; animation-fill-mode: forwards;">
                    <a href="https://github.com/dasihayu" target="_blank" rel="noopener noreferrer"
                        class="group p-3 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/dasi-hayupermana-b96882263/" target="_blank"
                        rel="noopener noreferrer"
                        class="group p-3 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.23 0H1.77C.8 0 0 .8 0 1.77v20.46C0 23.2.8 24 1.77 24h20.46c.98 0 1.77-.8 1.77-1.77V1.77C24 .8 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.7c-1.16 0-2.1-.94-2.1-2.1 0-1.16.94-2.1 2.1-2.1 1.16 0 2.1.94 2.1 2.1 0 1.16-.94 2.1-2.1 2.1zm14.63 12.4h-3.62v-5.67c0-1.35-.02-3.1-1.88-3.1-1.88 0-2.17 1.47-2.17 3v5.77h-3.62V9.24h3.48v1.6h.05c.48-.92 1.66-1.88 3.42-1.88 3.65 0 4.34 2.4 4.34 5.53v5.61z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Image with Advanced Animation Effects -->
            <div class="lg:w-1/2 flex justify-center lg:justify-end">
                <div class="relative opacity-0 animate-fade-in-up" style="animation-delay: 600ms; animation-fill-mode: forwards;">
                    <!-- Animated background glow -->
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-purple-500 to-blue-400 opacity-0 blur-3xl rounded-full animate-pulse-slow"></div>
                    
                    <!-- Floating effect container -->
                    <div class="animate-float">
                        <!-- Image frame with hover effect -->
                        <div class="relative group">
                            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-2xl blur opacity-30 group-hover:opacity-60 transition duration-1000"></div>
                            <div class="relative">
                                <img src="{{ asset('assets/profile.jpg') }}" alt="Dasi Hayu"
                                    class="w-[280px] sm:w-[320px] lg:w-[400px] rounded-2xl shadow-xl transition-all duration-500 group-hover:shadow-2xl group-hover:shadow-blue-500/20 group-hover:-translate-y-2">
                                
                                <!-- Decorative elements -->
                                <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-white dark:bg-gray-800 rounded-full flex items-center justify-center shadow-lg transform rotate-12 group-hover:rotate-0 transition-transform duration-700">
                                    <div class="text-blue-600 dark:text-blue-400 font-bold text-xl">&lt;/&gt;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add these styles to your CSS file for the new animations -->
<style>
@keyframes fade-slide-down {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fade-in-up {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

@keyframes pulse-slow {
    0%, 100% {
        opacity: 0.1;
    }
    50% {
        opacity: 0.3;
    }
}

.animate-fade-slide-down {
    animation: fade-slide-down 0.7s ease-out forwards;
}

.animate-fade-in-up {
    animation: fade-in-up 0.7s ease-out forwards;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-pulse-slow {
    animation: pulse-slow 4s ease-in-out infinite;
}
</style>
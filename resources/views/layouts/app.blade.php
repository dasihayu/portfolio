<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dasihayu - @yield('title', 'Portfolio')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')

    <script>
        // Check initial theme
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="font-sans">
    <nav
        class="mx-auto px-4 lg:px-48 py-4 sticky top-0 bg-white dark:bg-gray-800 shadow z-10 transition-colors duration-300">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div>
                    <a href="{{ route('home') }}" class="text-xl md:text-2xl font-bold text-gray-800 dark:text-white">
                        Dasihayu
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="flex items-center gap-4">
                    <ul class="hidden md:flex space-x-6">
                        @php
                            $navItems = [
                                ['label' => 'Home', 'route' => 'home'],
                                ['label' => 'About', 'route' => 'about.index'],
                                ['label' => 'Projects', 'route' => 'projects.index'],
                                ['label' => 'Blogs', 'route' => 'blogs.index'],
                            ];
                        @endphp

                        @foreach ($navItems as $item)
                            <li>
                                <a href="{{ route($item['route']) }}"
                                    class="transition duration-300 {{ request()->routeIs($item['route']) || ($item['route'] === 'blogs.index' && request()->routeIs('blogs.show'))
                                        ? 'text-blue-600 dark:text-blue-400 font-semibold border-b-2 border-blue-600 dark:border-blue-400 pb-1'
                                        : 'text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400' }}">
                                    {{ $item['label'] }}
                                </a>

                            </li>
                        @endforeach
                    </ul>

                    <!-- Contact Button -->
                    <a href="{{ route('contact.index') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 hidden md:block">
                        Contact Me
                    </a>

                    <!-- Theme & Mobile Menu Button -->
                    <div class="flex items-center gap-4">
                        <button id="theme-toggle" class="text-gray-700 dark:text-gray-300">
                            <!-- Sun Icon -->
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" />
                            </svg>

                            <!-- Moon Icon -->
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                            </svg>
                        </button>

                        <!-- Mobile Menu Toggle -->
                        <button id="menu-toggle" class="md:hidden text-gray-700 dark:text-gray-300 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden mt-4 hidden">
                <ul class="space-y-3 pb-3">
                    @foreach ($navItems as $item)
                        <li>
                            <a href="{{ route($item['route']) }}"
                                class="transition duration-300 {{ request()->routeIs($item['route']) || ($item['route'] === 'blogs.index' && request()->routeIs('blogs.show'))
                                    ? 'text-blue-600 dark:text-blue-400 font-semibold border-b-2 border-blue-600 dark:border-blue-400 pb-1'
                                    : 'text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400' }}">
                                {{ $item['label'] }}
                            </a>

                        </li>
                    @endforeach
                    <li>
                        <a href="{{ route('contact.index') }}"
                            class="block w-full bg-blue-600 dark:bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition duration-300 text-center">
                            Contact Me
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        const themeToggleBtn = document.getElementById('theme-toggle');
        const lightIcon = document.getElementById('theme-toggle-light-icon');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');

        // Update icons based on the current theme
        function updateIcons() {
            if (document.documentElement.classList.contains('dark')) {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            } else {
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
            }
        }

        // Initial icon update
        updateIcons();

        themeToggleBtn.addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
            updateIcons();
        });
    </script>

    <script>
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        const themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {
            // Toggle icons
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // If is set in localStorage
            if (localStorage.theme === 'dark') {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        });
    </script>

    <main>
        @yield('content')
    </main>

    <footer
        class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white py-12 px-4 transition-colors duration-300">
        <div class="container mx-auto">
            <!-- Footer Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Brand Column -->
                <div class="space-y-4">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white">Dasihayu</h2>
                    <p class="text-gray-600 dark:text-gray-400 text-sm md:text-base">
                        Crafting digital experiences with clean code and elegant design.
                    </p>
                    <div class="flex gap-4">
                        <a href="https://github.com/dasihayu" target="_blank"
                            class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/dasi-hayupermana-b96882263/" target="_blank"
                            class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.23 0H1.77C.8 0 0 .8 0 1.77v20.46C0 23.2.8 24 1.77 24h20.46c.98 0 1.77-.8 1.77-1.77V1.77C24 .8 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.7c-1.16 0-2.1-.94-2.1-2.1 0-1.16.94-2.1 2.1-2.1 1.16 0 2.1.94 2.1 2.1 0 1.16-.94 2.1-2.1 2.1zm14.63 12.4h-3.62v-5.67c0-1.35-.02-3.1-1.88-3.1-1.88 0-2.17 1.47-2.17 3v5.77h-3.62V9.24h3.48v1.6h.05c.48-.92 1.66-1.88 3.42-1.88 3.65 0 4.34 2.4 4.34 5.53v5.61z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="mt-8 sm:mt-0">
                    <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white">Quick Links</h3>
                    <ul class="space-y-2 text-sm md:text-base">
                        <li><a href="/"
                                class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">Home</a>
                        </li>
                        <li><a href="/about"
                                class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">About</a>
                        </li>
                        <li><a href="/projects"
                                class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">Projects</a>
                        </li>
                        <li><a href="/blogs"
                                class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">Blog</a>
                        </li>
                        <li><a href="/contact"
                                class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="mt-8 lg:mt-0">
                    <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white">Services</h3>
                    <ul class="space-y-2 text-sm md:text-base">
                        <li class="text-gray-600 dark:text-gray-400">Web Development</li>
                        <li class="text-gray-600 dark:text-gray-400">Mobile Development</li>
                        <li class="text-gray-600 dark:text-gray-400">UI/UX Design</li>
                        <li class="text-gray-600 dark:text-gray-400">API Integration</li>
                        <li class="text-gray-600 dark:text-gray-400">Technical Consulting</li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="mt-8 lg:mt-0">
                    <h3 class="font-bold text-lg mb-4 text-gray-900 dark:text-white">Contact Info</h3>
                    <ul class="space-y-3 text-sm md:text-base">
                        <li class="flex items-center gap-2 text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="break-all">work.dasihayu@gmail.com</span>
                        </li>
                        <li class="flex items-center gap-2 text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Semarang, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="pt-8 border-t border-gray-200 dark:border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
                    <p class="text-gray-600 dark:text-gray-400">
                        © 2025 Dasihayu. All rights reserved.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">Privacy
                            Policy</a>
                        <a href="#"
                            class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition duration-300">Terms
                            of
                            Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>

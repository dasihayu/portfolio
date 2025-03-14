<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'dasihayu')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">

    <!-- CSS -->
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Sora', sans-serif;
        }
    </style>

    <!-- AlpineJS for menu toggle -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex flex-col min-h-screen" x-data="{ isOpen: false }">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm z-50 border-b border-gray-100">
        <div class="relative py-4 container mx-auto px-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="text-base font-bold z-10">Dasihayu</a>

                <!-- Mobile menu button -->
                <button @click="isOpen = !isOpen" class="lg:hidden p-2 rounded-lg focus:outline-none"
                    aria-label="Toggle menu">
                    <svg class="w-6 h-6" :class="{ 'hidden': isOpen, 'block': !isOpen }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="w-6 h-6" :class="{ 'block': isOpen, 'hidden': !isOpen }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <div class="flex space-x-4 text-base font-bold">
                        <a href="/"
                            class="relative hover:text-gray-600 transition-colors {{ request()->is('/') ? 'after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black' : '' }}">Home</a>
                        <a href="/about"
                            class="relative hover:text-gray-600 transition-colors {{ request()->is('about') ? 'after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black' : '' }}">About
                            Me</a>
                        <a href="/projects"
                            class="relative hover:text-gray-600 transition-colors {{ request()->is('projects') ? 'after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black' : '' }}">Projects</a>
                        {{-- <a href="/projects"
                            class="relative hover:text-gray-600 transition-colors {{ request()->is('blogs') ? 'after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black' : '' }}">Blogs</a> --}}
                        {{-- <a href="/contact"
                            class="relative hover:text-gray-600 transition-colors {{ request()->is('contact') ? 'after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-black' : '' }}">Contact
                            Me</a> --}}
                    </div>
                    <button
                        class="px-6 py-3 bg-black text-white font-semibold rounded flex items-center gap-2 hover:bg-gray-800 transition-colors">
                        Let's Talk
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="lg:hidden absolute top-full left-0 right-0 bg-white shadow-lg rounded-lg mt-2 py-4 px-4"
                x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95" @click.away="isOpen = false">
                <div class="flex flex-col space-y-4">
                    <a href="/"
                        class="relative text-base font-bold hover:text-gray-600 transition-colors {{ request()->is('/') ? 'text-black after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-black' : 'text-gray-600' }}">Home</a>
                    <a href="/about"
                        class="relative text-base font-bold hover:text-gray-600 transition-colors {{ request()->is('about') ? 'text-black after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-black' : 'text-gray-600' }}">About
                        Me</a>
                    <a href="/projects"
                        class="relative text-base font-bold hover:text-gray-600 transition-colors {{ request()->is('projects') ? 'text-black after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-black' : 'text-gray-600' }}">Projects</a>
                    <a href="/projects"
                        class="relative text-base font-bold hover:text-gray-600 transition-colors {{ request()->is('blogs') ? 'text-black after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-black' : 'text-gray-600' }}">Blogs</a>
                    <a href="/contact"
                        class="relative text-base font-bold hover:text-gray-600 transition-colors {{ request()->is('contact') ? 'text-black after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-black' : 'text-gray-600' }}">Contact
                        Me</a>
                    <button
                        class="px-6 py-3 bg-black text-white font-semibold rounded flex items-center gap-2 justify-center hover:bg-gray-800 transition-colors">
                        Let's Talk
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Add padding to account for fixed navbar -->
    <div class="pt-20">
        <!-- Main Content -->
        <main class="py-4">
            <div class="">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-black text-white py-8 md:py-12 mt-auto">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    <!-- Brand Section -->
                    <div class="space-y-4 text-center sm:text-left">
                        <h3 class="text-xl font-bold">Dasihayu</h3>
                        <p class="text-gray-400 text-sm md:text-base">Building digital products, brands, and
                            experiences.
                        </p>
                        <div class="flex space-x-4 justify-center sm:justify-start">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors p-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors p-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="space-y-4 text-center sm:text-left">
                        <h3 class="text-xl font-bold">Quick Links</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="/" class="text-gray-400 hover:text-white transition-colors block py-1">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/about" class="text-gray-400 hover:text-white transition-colors block py-1">
                                    About Me
                                </a>
                            </li>
                            <li>
                                <a href="/projects"
                                    class="text-gray-400 hover:text-white transition-colors block py-1">
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="/contact"
                                    class="text-gray-400 hover:text-white transition-colors block py-1">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="space-y-4 text-center sm:text-left">
                        <h3 class="text-xl font-bold">Contact</h3>
                        <ul class="space-y-2">
                            <li class="text-gray-400 py-1">Jakarta, Indonesia</li>
                            <li>
                                <a href="mailto:hello@dasihayu.dev"
                                    class="text-gray-400 hover:text-white transition-colors block py-1">
                                    hello@dasihayu.dev
                                </a>
                            </li>
                            <li>
                                <a href="tel:+6281234567890"
                                    class="text-gray-400 hover:text-white transition-colors block py-1">
                                    +62 812 3456 7890
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                    <p>&copy; {{ date('Y') }} Dasihayu. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScript -->
    @stack('scripts')
</body>

</html>

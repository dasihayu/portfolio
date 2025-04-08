@extends('layouts.app')

@section('title', 'Welcome to My Portfolio')

@section('content')
    <!-- Hero Section -->
    <section class="min-h-screen bg-gray-50 flex items-center">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between gap-16">
                <!-- Text Content -->
                <div class="md:w-1/2 space-y-6">
                    <span class="text-blue-600 font-medium">👋 Welcome to my portfolio</span>
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight">
                        Hi, I'm Dasi Hayu<br>
                        <span class="text-blue-600">Full Stack Developer</span>
                    </h1>
                    <p class="text-xl text-gray-600">
                        Crafting digital experiences with clean code and elegant design.
                        Specialized in building modern web applications.
                    </p>
                    <div class="flex gap-4">
                        <button
                            class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-gray-900 transition duration-300 font-medium">
                            View Projects
                        </button>
                        <button
                            class="border-2 border-gray-800 text-gray-800 px-8 py-4 rounded-lg hover:bg-gray-800 hover:text-white transition duration-300 font-medium">
                            Contact Me
                        </button>
                    </div>
                    <!-- Social Links -->
                    <div class="flex gap-6 pt-6">
                        <a href="#" class="text-gray-600 hover:text-blue-600">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-blue-600">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M22.23 0H1.77C.8 0 0 .8 0 1.77v20.46C0 23.2.8 24 1.77 24h20.46c.98 0 1.77-.8 1.77-1.77V1.77C24 .8 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.7c-1.16 0-2.1-.94-2.1-2.1 0-1.16.94-2.1 2.1-2.1 1.16 0 2.1.94 2.1 2.1 0 1.16-.94 2.1-2.1 2.1zm14.63 12.4h-3.62v-5.67c0-1.35-.02-3.1-1.88-3.1-1.88 0-2.17 1.47-2.17 3v5.77h-3.62V9.24h3.48v1.6h.05c.48-.92 1.66-1.88 3.42-1.88 3.65 0 4.34 2.4 4.34 5.53v5.61z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Image -->
                <div class="md:w-1/2">
                    <img src="https://placehold.co/800x600" alt="Hero Image"
                        class="rounded-2xl shadow-2xl w-full hover:scale-105 transition duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-12">
                <!-- Left Column - Image -->
                <div class="md:w-1/3">
                    <img src="https://placehold.co/400x500" alt="Profile Image"
                        class="rounded-2xl shadow-lg w-full hover:scale-105 transition duration-500">
                </div>

                <!-- Right Column - Content -->
                <div class="md:w-2/3 space-y-6">
                    <span class="text-blue-600 font-medium">About Me</span>
                    <h2 class="text-4xl font-bold text-gray-900">
                        Passionate Developer & <span class="text-blue-600">Creative Problem Solver</span>
                    </h2>

                    <p class="text-gray-600 leading-relaxed">
                        With over 5 years of experience in web development, I specialize in creating
                        user-centric applications that solve real-world problems. My journey in
                        technology began with a curiosity about how things work, which evolved into
                        a passion for building innovative solutions.
                    </p>

                    <!-- Skills Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pt-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-bold text-gray-900">Frontend</h3>
                            <p class="text-gray-600">React, Vue, TailwindCSS</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-bold text-gray-900">Backend</h3>
                            <p class="text-gray-600">Laravel, Node.js</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-bold text-gray-900">Database</h3>
                            <p class="text-gray-600">MySQL, PostgreSQL, MongoDB</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-bold text-gray-900">DevOps</h3>
                            <p class="text-gray-600">Docker, CI/CD</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-bold text-gray-900">Tools</h3>
                            <p class="text-gray-600">Git, VS Code, Figma</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-bold text-gray-900">Soft Skills</h3>
                            <p class="text-gray-600">Communication, Leadership</p>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 md:grid-cols-3 gap-4 pt-6">
                        <div class="text-center">
                            <span class="block text-3xl font-bold text-blue-600">2+</span>
                            <span class="text-gray-600">Years Experience</span>
                        </div>
                        <div class="text-center">
                            <span class="block text-3xl font-bold text-blue-600">10+</span>
                            <span class="text-gray-600">Projects Completed</span>
                        </div>
                        <div class="text-center">
                            <span class="block text-3xl font-bold text-blue-600">3+</span>
                            <span class="text-gray-600">Happy Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

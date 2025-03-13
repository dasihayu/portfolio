<section class="py-8 md:py-16">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center space-y-4 mb-8 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold">Featured Projects</h2>
            <div class="w-20 h-1 bg-black mx-auto"></div>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base px-4">
                Here are some of the selected projects I've worked on. Each project represents unique challenges and
                solutions.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <!-- Project Card 1 -->
            <div class="group bg-white rounded-lg shadow-lg overflow-hidden h-full">
                <div class="relative overflow-hidden aspect-video">
                    <img src="{{ asset('images/project.png') }}" alt="Project 1"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="#"
                            class="px-6 py-2 bg-white text-black rounded-full font-semibold hover:bg-gray-100 transition-colors">
                            View Project
                        </a>
                    </div>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-bold mb-2">E-Commerce Platform</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">A full-featured online shopping platform built
                        with Laravel and Vue.js</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="group bg-white rounded-lg shadow-lg overflow-hidden h-full">
                <div class="relative overflow-hidden aspect-video">
                    <img src="{{ asset('images/project.png') }}" alt="Project 2"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="#"
                            class="px-6 py-2 bg-white text-black rounded-full font-semibold hover:bg-gray-100 transition-colors">
                            View Project
                        </a>
                    </div>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-bold mb-2">Task Management App</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">A collaborative task management solution for
                        remote teams</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">React</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">MongoDB</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="group bg-white rounded-lg shadow-lg overflow-hidden h-full">
                <div class="relative overflow-hidden aspect-video">
                    <img src="{{ asset('images/project.png') }}" alt="Project 3"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="#"
                            class="px-6 py-2 bg-white text-black rounded-full font-semibold hover:bg-gray-100 transition-colors">
                            View Project
                        </a>
                    </div>
                </div>
                <div class="p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-bold mb-2">Portfolio Website</h3>
                    <p class="text-gray-600 mb-4 text-sm md:text-base">A modern portfolio website built with Laravel and
                        Tailwind CSS</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">Tailwind</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs md:text-sm">Alpine.js</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

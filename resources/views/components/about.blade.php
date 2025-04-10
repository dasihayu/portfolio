<section class="py-12 sm:py-16 lg:py-20 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
            <!-- Left Column - Image -->
            <div class="lg:w-1/3 flex justify-center lg:justify-start">
                <img src="{{ asset('assets/profile.jpg') }}" alt="Profile Image"
                    class="rounded-2xl shadow-lg w-[280px] sm:w-[320px] lg:w-3/4 hover:scale-105 transition duration-500 dark:shadow-gray-800">
            </div>

            <!-- Right Column - Content -->
            <div class="lg:w-2/3 space-y-4 sm:space-y-6">
                <span class="text-blue-600 dark:text-blue-400 font-medium text-sm sm:text-base">About Me</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white">
                    Passionate Developer & <span class="text-blue-600 dark:text-blue-400">Creative Problem Solver</span>
                </h2>

                <p class="text-base sm:text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                    With over 2 years of experience in web development, I specialize in creating
                    user-centric applications that solve real-world problems. My journey in
                    technology began with a curiosity about how things work, which evolved into
                    a passion for building innovative solutions.
                </p>

                <!-- Skills Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 pt-4 sm:pt-6">
                    <div class="bg-gray-50 dark:bg-gray-800 p-3 sm:p-4 rounded-lg transition-colors duration-300">
                        <h3 class="font-bold text-gray-900 dark:text-white text-sm sm:text-base">Frontend</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">React, Vue, TailwindCSS</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 p-3 sm:p-4 rounded-lg transition-colors duration-300">
                        <h3 class="font-bold text-gray-900 dark:text-white text-sm sm:text-base">Backend</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">Laravel, Node.js</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 p-3 sm:p-4 rounded-lg transition-colors duration-300">
                        <h3 class="font-bold text-gray-900 dark:text-white text-sm sm:text-base">Database</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">MySQL, PostgreSQL, MongoDB</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 p-3 sm:p-4 rounded-lg transition-colors duration-300">
                        <h3 class="font-bold text-gray-900 dark:text-white text-sm sm:text-base">DevOps</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">Docker, CI/CD</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 p-3 sm:p-4 rounded-lg transition-colors duration-300">
                        <h3 class="font-bold text-gray-900 dark:text-white text-sm sm:text-base">Tools</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">Git, VS Code, Figma</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 p-3 sm:p-4 rounded-lg transition-colors duration-300">
                        <h3 class="font-bold text-gray-900 dark:text-white text-sm sm:text-base">Soft Skills</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">Communication, Leadership</p>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-4 sm:pt-6">
                    <div class="text-center">
                        <span class="block text-2xl sm:text-3xl font-bold text-blue-600 dark:text-blue-400">2+</span>
                        <span class="text-sm sm:text-base text-gray-600 dark:text-gray-400">Years Experience</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-2xl sm:text-3xl font-bold text-blue-600 dark:text-blue-400">10+</span>
                        <span class="text-sm sm:text-base text-gray-600 dark:text-gray-400">Projects Completed</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-2xl sm:text-3xl font-bold text-blue-600 dark:text-blue-400">3</span>
                        <span class="text-sm sm:text-base text-gray-600 dark:text-gray-400">Happy Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

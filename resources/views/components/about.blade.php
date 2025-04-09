<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-12">
            <!-- Left Column - Image -->
            <div class="md:w-1/3">
                <img src="{{ asset('assets/profile.jpg') }}" alt="Profile Image"
                    class="rounded-2xl shadow-lg w-3/4 hover:scale-105 transition duration-500">
            </div>

            <!-- Right Column - Content -->
            <div class="md:w-2/3 space-y-6">
                <span class="text-blue-600 font-medium">About Me</span>
                <h2 class="text-4xl font-bold text-gray-900">
                    Passionate Developer & <span class="text-blue-600">Creative Problem Solver</span>
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    With over 2 years of experience in web development, I specialize in creating
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

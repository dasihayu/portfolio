<section class="py-8 md:py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Header for mobile -->
        <div class="md:hidden text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold">About Me</h2>
            <div class="w-20 h-1 bg-black mx-auto mt-2"></div>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
            <!-- Left Side - Image -->
            <div class="w-full md:w-1/2 max-w-sm md:max-w-none mx-auto">
                <img src="{{ asset('images/profile.JPG') }}" alt="About Me"
                    class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
            </div>

            <!-- Right Side - Content -->
            <div class="w-full md:w-1/2 space-y-6">
                <!-- Section Header for desktop -->
                <div class="hidden md:block space-y-2">
                    <h2 class="text-2xl md:text-3xl font-bold">About Me</h2>
                    <div class="w-20 h-1 bg-black"></div>
                </div>

                <p class="text-gray-600 text-base md:text-lg text-center md:text-left">
                    Hi! I'm Dasihayu, a passionate web developer with a keen eye for creating elegant solutions. With 3
                    years of experience in web development, I specialize in building responsive and user-friendly
                    applications.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 py-4">
                    <div class="space-y-2 text-center sm:text-left">
                        <h3 class="font-semibold">Name:</h3>
                        <p class="text-gray-600">Dasi Hayupermana</p>
                    </div>
                    <div class="space-y-2 text-center sm:text-left">
                        <h3 class="font-semibold">Email:</h3>
                        <p class="text-gray-600">work.dasihayu@gmail.com</p>
                    </div>
                    <div class="space-y-2 text-center sm:text-left">
                        <h3 class="font-semibold">Location:</h3>
                        <p class="text-gray-600">Semarang, Indonesia</p>
                    </div>
                    <div class="space-y-2 text-center sm:text-left">
                        <h3 class="font-semibold">Availability:</h3>
                        <p class="text-gray-600">Open for projects</p>
                    </div>
                </div>

                <div class="flex gap-4 justify-center md:justify-start">
                    <!-- Social Media Links -->
                    <a href="https://github.com/dasihayu" class="p-2 text-gray-600 hover:text-black transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/dasi-hayupermana-b96882263/" class="p-2 text-gray-600 hover:text-black transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
